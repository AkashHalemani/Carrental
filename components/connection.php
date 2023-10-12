<?php
define('DB_SERVER','127.0.0.1:3308');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','car_rental');

//try{
//    $con = new PDO("mysqli:host=".DB_SERVER.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
//    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//    
//}
//catch(PDOException $e){
//    die("ERROR: Could not connect. ".$e->getMessage());
//}
//
$con = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
?>