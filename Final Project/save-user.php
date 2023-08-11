<!--Stephen Hill
    COMP1006
    Final Project - save user page
    AUGUST 11TH 2023-->
<?php require ('./inc/header.php'); ?>
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Php Assignment 2 - User Save Page</title>
        <link href="./css/style.css" rel="stylesheet">
    </head>
<body>
</body>
<?php
// Connection
require './inc/database.php';
// User Variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
//	Validate to make sure inputs are correct format/password matches
$valid = true;
if(empty($first_name)) {
    echo '<p>First name missing</p>';
    $valid = false;
}
if(empty($last_name)) {
    echo '<p>Last name missing</p>';
    $valid = false;
}
if(empty($username)) {
    echo '<p>Username missing</p>';
    $valid = false;
}
if((empty($password)) || ($password != $confirm)) {
    echo '<p>Passwords did not match.</p>';
    $valid = false;
}
//	Decide to save or not
if($valid){
    $password = hash('sha512', $password);
//		Insert into SQL database using entered values after validating.
    $sql = "INSERT INTO userLoginsFinal (first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";
    $conn->exec($sql);
    echo '<section>';
    echo '<div>';
    echo '<h3>Saved User</h3>';
    echo '</div>';
    echo '</section>';
    $conn = null;
}
//If account created successfully then redirect to the login screen
if($valid) {
    echo '<section class="loginRedirect">';
    echo '<h3>Click the button below to head to the sign in page!</h3>';
    echo '<div class="submit">';
    echo '<a href="index.php">Sign In</a>';
    echo '</div>';
    echo '</section>';
//    Else rediredct to sign up page so they can try again.
}else {
    echo '<section class="indexRedirect">';
    echo '<h3>Account was not created! Please try again on the sign up page</h3>';

    echo '<a href="register.php">';
    echo '<div class="signupButton"><button>Sign up</button>';
    echo '</div></a>';
    echo '</section>';
}
?>

<?php require ('./inc/footer.php'); ?>
