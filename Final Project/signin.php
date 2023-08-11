<!--Stephen Hill
    COMP1006
    Final project - sign in page
    AUGUST 11TH 2023-->
<?php require ('./inc/footer.php'); ?>
<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Assignment 2</title>
    <link href="./css/style.css" rel="stylesheet">
</head>

<a href="./index.php">
    <section class="header">
        <h1>Example Php Login Page</h1>
    </section>
</a>
<main>
    <section class="main">
        <div id="login">
            <h3>Please Sign in below</h3>
            <form method="post" action="./inc/validate.php">
                <p><input name="username" type="text" placeholder="Username" required /></p>
                <p><input name="password" type="password" placeholder="Password" required /></p>
                <input class="login" type="submit" value="Login" />
            </form>
        </div>
    </section>
</main>
<?php require ('./inc/footer.php'); ?>