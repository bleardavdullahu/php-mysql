<?php

$host = "localhost";
$db="testbleard";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "ALTER TABLE users ADD tel INT(12)";
   
    
    $conn->exec($sql);

    echo("Connected");

}catch(Exeption $e){
    echo("Not connected");

}
?>