<?php

include_once('config.php');

if(isset($POST['update']))
    {

$id = $POST['id'];
$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];

$sql = "UPDATE users
SET username = :username,
name = :name,
surname= :surname"
    }