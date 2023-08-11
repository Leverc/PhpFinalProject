<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Final project</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<section class="header">
    <img src="./logo.png">
    <h1>Example Php Home Page</h1>
    <div class="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="register.php">Sign up</a></li>
        </ul>
        <form class="navlogin" method="post" action="./inc/validate.php">
            <p><input name="username" type="text" placeholder="Username" required /></p>
            <p><input name="password" type="password" placeholder="Password" required /></p>
            <input class="login" type="submit" value="Login" />
        </form>
    </div>
</section>
<body>
</body>