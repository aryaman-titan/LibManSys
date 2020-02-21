
<?php 
include('server.php');
if (isset($_SESSION['id'])) {
    header('location: welcome.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="login.css">

</head>

<body>

<div class="form-modal">
    <div class="login-form"><a href="admin.php" class="btn login" style="text-decoration:none">Login as Admin</a></div>
</div>

    <div class="form-modal">

        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>

        <div id="login-form">
            <form method="POST" action="index.php">
                <input type="text" name="username" placeholder="Enter username or email ID" required />
                <input type="password" name="password" placeholder="Enter password" required />
                <button type="submit" name="login-client" class="btn login">login as Client</button>
            </form>

        </div>

        <div id="signup-form">
            <form method="POST" action="index.php">
                <input type="email" name="email" placeholder="Enter your email" required />
                <input type="text" name="username" placeholder="Choose username" required />
                <input type="text" name="name" placeholder="Enter your name" required />
                <input type="text" name="enrl" placeholder="Enter your Enrl. No." required />
                <input type="password" name="password" placeholder="Create password" required />
                <button type="submit" name="signup" class="btn signup">create account</button>
            </form>
        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>