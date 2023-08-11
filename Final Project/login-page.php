<!--Stephen Hill
    COMP1006
    Final Project - login page/members area
    AUGUST 11TH 2023-->
<?php require ('./inc/header.php'); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Assignment 2 - Members Area</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<?php
//   Check the session before we show any data
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:signin.php');
    exit();
}else{

    //Display a success message if logged in
    echo '<p>Login Successful, welcome to the members area</p>';
    //Simple button to logout
    echo '<div class=submit>';
    echo '<a href="logout.php">Logout</a>';
    echo '</div>';
    $conn = null;
}
?>
<?php require ('./inc/footer.php'); ?>
