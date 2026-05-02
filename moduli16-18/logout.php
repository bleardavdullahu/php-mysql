<?php
session_start();

include_once('');
session_destroy();
header("Location: login.php");

?>