<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Final project</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<section class="header">
    <img src="./inc/logo.png">
    <h1>Example Php Home Page</h1>
<!--    Container to store the nav-->
    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login-page.php">Members</a></li>
            <li><a href="register.php">Sign up</a></li>
        </ul>
<!--        Form for the header log in-->
        <form class="navlogin" method="post" action="./inc/validate.php">
            <p><input name="username" type="text" placeholder="Username" required /></p>
            <p><input name="password" type="password" placeholder="Password" required /></p>
            <input class="login" type="submit" value="Login" />
        </form>
    </div>
</section>
<body>
</body>