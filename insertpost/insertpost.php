<?php


session_start();
require_once '../db.php';


print_r($_POST);
print_r($_FILES);

$title = $_POST['title'];
$textarea = $_POST['textarea'];
$category = $_POST['category'];
$file = $_FILES['file'];

?>