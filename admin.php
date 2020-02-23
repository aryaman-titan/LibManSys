<?php
include('server.php');
include('config.php');
session_start();
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
</head>

<body>
    Welcome

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

            function isIssued($conn, $bookId)
            {
                $uid = $_SESSION['id'];
                $b_id = $bookId;
                $check_issue = mysqli_query($conn, "SELECT * FROM `client_request` WHERE book_id = $b_id AND client_id = $uid");
                if (mysqli_num_rows($check_issue) == 1) {
                    return true;
                } else {
                    return false;
                }
            }
            while ($row = $get_books->fetch_assoc()) {

                echo "<tr>
      <td>" . $row['id'] . "</td>
      <td>" . $row['book_name'] . "</td>
      <td>" . $row['book_count_left'] . "</td>
      <td>" . $row['book_count_issued'] . "</td>";

                echo "</tr>";
            }

            ?>


        </table>
    </div>
<br><br><br><br>
    <div class="client-requests">
        <table>
            <tr>
                <th>Token-ID</th>
                <th>Book-ID</th>
                <th>Client ID</th>
                <th>Status</th>
            </tr>

            <?php
            $get_requests = mysqli_query($conn, "SELECT * FROM `client_request`");

           
            while ($row = $get_requests->fetch_assoc()) {

                echo "<tr>
      <td>" . $row['token_id'] . "</td>
      <td>" . $row['book_id'] . "</td>
      <td>" . $row['client_id'] . "</td>
      <td>" . $row['status'] . "</td>";

                echo "</tr>";
            }

            ?>

        </table>
    </div>
</body>

</html>