<!--Stephen Hill
    COMP1006
    Final Project - database connection
    AUGUST 11TH 2023-->
<?php
try {
    //establish connection and store in variable
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Stephen200240336', 'Stephen200240336', 'kQbTT8Y7D4');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    //reports the message if the connection fails
    echo "Connection failed: " . ($e - getMessage());
}
?>