<?php require ('./inc/header.php'); ?>
<html lang="en-us">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Php Final project edit user</title>
    <link href="./css/style.css" rel="stylesheet">
</head>
<?php
require './inc/database.php';
//  Save the current row that redirected us here
$current_row = $_POST['id'];
//    SQL to display the current row we are editing
    $sql = 'SELECT fname, lname, email, telNumber FROM userList WHERE ID = ' . $current_row;
//    Save query result in variable to iterate thru later
    $result = $conn->query($sql);

//    Populate the fields with old values from the post method
echo '<p>Please enter any information you wish to update</p>';
    foreach($result as $row) {
        echo '<section class="updateSection">
              <form class="updateForm" action="editEntry.php" method="post">
                    <p><input name="fname" type="text" value="' . $row['fname'] . '" required/></p>
                    <p><input name="lname" type="text" value="' . $row['lname'] . '" /></p>
                    <p><input name="email" type="text" value="' . $row['email'] . '" required /></p>
                    <p><input name="telNumber" type="text" value="' . $row['telNumber'] . '" required /></p>
                    <input type="hidden" name="id" value="' . $current_row . '" />
                    <input id="updateButton" type="submit" name="submit" value="Update" />
              </form>
              </section>
';

}
?>
</html>
<?php require ('./inc/footer.php'); ?>

