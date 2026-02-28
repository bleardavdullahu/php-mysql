<?php

$host = "localhost";
$db="testbleard";
$user = "root";
$pass = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

   
    $username = "Arianita";

    $password = "nita1234";

    $sql = "INSERT INTO users(username, password) VALUES ('$username', 'password')";
    $conn->exec($sql);

    echo("Connected");

}catch(Exeption $e){
    echo("Not connected");

}
?>