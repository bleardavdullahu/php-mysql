<?php

$host = "localhost";
$db="testbleard";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "DROP TABLE products";
   
    
    $conn->exec($sql);

    echo("Connected");

}catch(Exeption $e){
    echo("Not connected");

}
?>