<?php
include('server.php');
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["name"];?></title>
</head>
<body>
Welcome <?php echo $_SESSION["name"];?>

<div style="display: flex; justify-content: flex-end;"><a href="welcome.php?logout=1">Logout</a>
</div>
<hr>



</body>
</html>