<?php

$host = "localhost";
$db="testbleard";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "ALTER TABLE pruducents DROP CLOWN name";
   
    
    $conn->exec($sql);

    echo("Connected");

}catch(Exception $e){
    echo("Not connected");

}
?>