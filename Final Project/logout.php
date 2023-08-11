<!--Stephen Hill
    COMP1006
    Final Project - logout redirect
    AUGUST 11TH 2023-->
<?php
//  access existing session
session_start();
//  remove session variables
session_unset();
// this kills the session
session_destroy();
//  redirect to home page
header('location:index.php');
?>