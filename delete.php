<?php
$email = $_GET['id'];
include_once 'class.php';
$db = new Db();
$db->delete($email);
header("Location: view.php");
?>