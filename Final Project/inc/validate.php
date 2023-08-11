<!--Stephen Hill
    COMP1006
    Final Project - validation page
    AUGUST 11TH 2023-->
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Assignment 2 - Members Area</title>
    <link href="./css/styleBasic.css" rel="stylesheet">
</head>
<body>
<a href="../index.php">
    <section class="header">
        <h1>Example Php Login Page</h1>
    </section>
</a>
</body>
<?php
//store the username and password, then hash them using sha512
$username = $_POST['username'];
$password = hash('sha512', $_POST['password']);
//connect to db
require 'database.php';
//set up and run the query to see if username/pass combo matches database
$sql = "SELECT user_id FROM userLogins WHERE username = '$username' AND password='$password'";
//store result of query in a variable
$result = $conn->query($sql);
$count = $result -> rowCount();
//check if any matches found
if($count == 1){
    echo '<p>Logged in successfully</p>';
    foreach($result as $row){
        //access the existing session created automatically by the server
        session_start();
        // Take the users ID from the database and store it in a session variable
        $_SESSION['user_id'] = $row['user_id'];
        // Redirect to the restricted page
        Header('Location: ../login-page.php');
    }
}else {
    echo '<h3>Login Failed</h3>';
}
$conn = null;
?>