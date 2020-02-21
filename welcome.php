<?php
include('server.php');
include('config.php');
session_start();
if (!isset($_SESSION['id'])) {
  header('location: index.php');
}

if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('location: index.php');
}

if(isset($_GET['requestId'])){
  $req_id = $_GET['requestId'];
  $id = $_SESSION['id'];

  mysqli_query($conn, "INSERT INTO `client_request` (`token_id`, `book_id`, `client_id`, `status`) VALUES (NULL, '$req_id', '$id', 'Pending')");

}


?>

<html lang="en">

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome <?php echo $_SESSION["name"]; ?></title>
</head>

<body>
  Welcome <?php echo $_SESSION["name"]; ?>

  <div style="display: flex; justify-content: flex-end;"><a href="welcome.php?logout=1">Logout</a>
  </div>
  <hr>

  <div class="books-available">
    <table>
      <tr>
        <th>Book ID</th>
        <th>Name</th>
        <th>Copies Left</th>
        <th>Copies Issued</th>
        <th></th>
        <th>Status</th>
      </tr>

      <?php
      $get_books = mysqli_query($conn, "SELECT * FROM `book_list`");
      
      function isIssued($conn, $bookId){
        $uid = $_SESSION['id'];
          $b_id = $bookId;
        $check_issue = mysqli_query($conn, "SELECT * FROM `client_request` WHERE book_id = $b_id AND client_id = $uid");
        if(mysqli_num_rows($check_issue) == 1){
          return true;
        }
        else{
          return false;
        }
      }
      while ($row = $get_books->fetch_assoc()) {

        echo "<tr>
      <td>" . $row['id'] . "</td>
      <td>" . $row['book_name'] . "</td>
      <td>" . $row['book_count_left'] . "</td>
      <td>" . $row['book_count_issued'] . "</td>";
    if(isIssued($conn, $row['id'])){
      echo "<td>Already Issued</td>";
    }
    else{
      echo "<td><a href=\"welcome.php?requestId=".$row['id']."\">Request Issue</a></td>";
    }
    echo "</tr>";
      }

      ?>


    </table>
  </div>



</body>

</html>