<?php


include('config.php');


//connecting to the database



if (isset($_POST["signup"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name =  mysqli_real_escape_string($conn, $_POST['name']);
    $username =  mysqli_real_escape_string($conn, $_POST['username']);
    $password =  mysqli_real_escape_string($conn, $_POST['password']);
    $enrl =  mysqli_real_escape_string($conn, $_POST['enrl']);

    $register = "INSERT INTO `userData` (`userID`, `username`, `name`, `enrl`, `password`, `email`) VALUES (NULL, '$username', '$name', '$enrl', '$password', '$email')";

    $get_user = "SELECT * FROM userData WHERE username='$username'";
    $result = mysqli_query($db, $get_user);

    if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['id'] = $row['userID'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['username'] = $row['username'];
        }
    }
}
