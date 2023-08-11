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
    //        Connect to the database
    require'./inc/database.php';
//        Set up query
    $sql = "SELECT * FROM userList";
//        Run the query
    $result = $conn->query("$sql");
    echo '<section class="userTable">';
    echo '<table> <tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
</tr>';
    foreach($result as $row){
        echo '
<tr>
    <td>' . $row['fname'] . '</td>
    <td>' . $row['lname'] . '</td>
    <td>' . $row['email'] . '</td>
    <td>' . $row['telNumber'] . '</td>
    <td>
        <form action="delete.php" method="post">
            <input type="hidden" name="row_id" value="' . $row['ID'] . '" />
            <a href="login-page.php"><input type="button" name="delete button" value="X" /></a>
        </form>
        <form action="edit.php" method="post">
            <input type="hidden" name="row_id" value="' . $row['ID'] . '" />
            <input type="submit" name="edit button" value="Edit" />
        </form>
    </td>
</tr>';
    }
    echo '</table>';
    //Simple button to logout
    echo '<div class=submit>';
    echo '<a href="logout.php">Logout</a>';
    echo '</div>';
    $conn = null;
}
?>
<?php require ('./inc/footer.php'); ?>
