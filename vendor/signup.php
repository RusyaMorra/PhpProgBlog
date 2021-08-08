<?php
session_start();
require_once '../db.php';


print_r($_POST);

$author_name = $_POST['author_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];


if($password===$password_confirm){
//con...
function get1323(){
    global  $db;
   $aa =  $db->query("SELECT * FROM posts");
   return $aa;
}

$bb = get1323();
echo $bb;
    
$sqlinsert  =  ("INSERT INTO author (`id`, `author_name`, `email`, `password`) VALUES (NULL, $author_name, $email, $password)");
$statment = $db->prepare($sqlinsert);
$statment -> bindParam(":author_name",$author_name);
$statment -> bindParam(":email",$email);
$statment -> bindParam(":password", $password);
$statment -> execute();

 $_SESSION['massage']= 'registration was successful!';
// header('location: ../index.php');

}else{
 $_SESSION['massage']= 'Passwords are not the same!!!';
    header('location: ../index.php');
    ?>
  
  
        <?php
  
}
















?>