<?php
include('server.php');
include('config.php');
session_start();
  if (!isset($_SESSION['id'])) {
  	header('location: index.php');
  }
  
  if(isset($_GET['logout'])){
      session_unset();
      session_destroy();
      header('location: index.php');
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

td, th {
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
    <title>Welcome <?php echo $_SESSION["name"];?></title>
</head>
<body>
Welcome <?php echo $_SESSION["name"];?>

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
  </tr>

  <?php 
    $get_books = mysqli_query($conn, "SELECT * FROM `book_list`");
    while($row = $get_books->fetch_assoc()){
      
      echo "<tr>
      <td>".$row['id']."</td>
      <td>".$row['book_name']."</td>
      <td>".$row['book_count_left']."</td>
      <td>".$row['book_count_issued']."</td>
      <td><a href='welcome.php?issue_id=".$row['id']."'>Request Issue</td>
    </tr>";
    }

  ?>
  
  
</table>
</div>



</body>
</html>