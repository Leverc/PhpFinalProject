<?php
require './inc/database.php';
//  Save the post variables into new variables to clean up insert statement
$current_row = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$telNumber = $_POST['telNumber'];
if(isset($_POST['id']))  {
//        SQL statement to insert newly entered values back into the initial row fed to edit.php
    $sql = "UPDATE userList SET fname='$fname', lname='$lname', email='$email', telNumber='$telNumber' WHERE ID=" . $current_row;
    $conn->query($sql);

//        Redirect back to the login-page
    Header('Location: ./login-page.php');

}
?>