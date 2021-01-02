<?php
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

$localhost = "localhost";
$username ="root";
$password = "";
$dbname = "sportradar";

$connect = new mysqli ($localhost, $username,$password, $dbname);

// check connection

// if($connect->connect_error) {
//     die ("Connection failed: " . $connect->connect_error);
// }
// else {echo "succes!";}