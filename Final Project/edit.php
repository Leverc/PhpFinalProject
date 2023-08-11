<?php
require './inc/header.php';
require './inc/database.php';
//  Save the current row that redirected us here
$current_row = $_POST['row_id'];
if(isset($_POST['row_id']))  {
//    SQL to display the current row we are editing
    $sql = 'SELECT FROM userList WHERE ID = ' . $current_row;
    $result = $conn->query($sql);

    foreach($result as $row) {

    }

}
require './inc/footer.php';
?>

