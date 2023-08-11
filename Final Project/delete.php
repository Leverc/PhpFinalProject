<?php
require './inc/database.php';
//  Save the current row that redirected us here
$current_row = $_POST['row_id'];
if(isset($_POST['row_id']))  {
//        SQL statement to delete the redirected row
    $sql = 'DELETE FROM userList WHERE ID = ' . $current_row;
    $conn->query($sql);

//        Redirect back to the login-page
    Header('Location: ./login-page.php');

}
?>