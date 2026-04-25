<?php

include_once('config.php');

if(isset($POST['sumbit'])){
    $emri = $_POST['emri'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if(empty($emri) || empty($surname) || empty($username) ||
     empty($email) || empty($password) || empty($confirm_password)){
        echo "You have not filled in all the fields.Try again.";
     }
    else{
        $sql = "INSERT INTO users(name, surname, username, email, password,
        confrim_password)";

        $insertsql = $connect->prepare($sql);

        $insertsql->bindParam(':name', $name);
        $insertsql->bindParam(':surname', $surname);
        $insertsql->bindParam(':username', $username);
        $insertsql->bindParam(':email', $email);
        $insertsql->bindParam(':confirm_password', $confirm_password);

        $insertsql-execute();

        header("Location: login.php");
        

}

?>