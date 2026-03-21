<?php

include_once("config.php");

$id= $_GET['id'];

$sql="DELETE  * FROM users WHERE id= :id";

$getUsers =$conn-> prepare($sql);

$getUsers->bind_param(":id",$id);

$getUsers->execute();

header('Location:dashboard.php');

?>