<?php
$host= 'localhost';
$db = 'testbleard';
$username='root';
$password= '';

try{
    $connect = new PDO("mysql:host=$host; dbname=$db" ,$username, $password);

    echo "Connection sucseful";
}
catch(Exception $e){
    echo "Something went wrong";
}
?>