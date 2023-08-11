<!--Stephen Hill
    COMP1006
    Final Project - Index Page
    AUGUST 11TH 2023-->
<!--Add Header-->
<?php require ('./inc/header.php'); ?>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Final project register</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<section class="main">
    <div id="new-user">
        <h3>Please enter your information</h3>
        <form method="post" action="save-user.php">
            <p><input class="form-control" name="first_name" type="text" placeholder="First Name" required/></p>
            <p><input class="form-control" name="last_name" type="text" placeholder="Last Name" required /></p>
            <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
            <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
            <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
            <input class="btn btn-light" type="submit" name="submit" value="Register" />
        </form>
    </div>

</section>

</body>

</html>
<!--Add footer-->
<?php require ('./inc/footer.php'); ?>
