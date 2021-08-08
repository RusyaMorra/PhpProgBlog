<?php 
session_start();


$connect = mysqli_connect('localhost', 'root', '', 'progblog');

if(!$connect){
    die('ошибка');
}


$email = $_POST['email'];
$password =md5( $_POST['password']);


$check_users =   mysqli_query($connect, "SELECT * FROM `author` WHERE `email`=  '$email' AND `password` = '$password'  ");

if(mysqli_num_rows($check_users)>0){
 

 
    $user = mysqli_fetch_assoc($check_users);
    $_SESSION['user']=[
        "id" => $user['id'],
         "author_name"=>$user['author_name'],
         "email"=>$user['email'],
   ];
   header('location: ../main.php');
}else{
    $_SESSION['massage']= 'invalid username or password!!!';
  
   header('location: ../index.php');
}






?>

<pre>
    <?php
    print_r($check_users);
    print_r($user);
    ?>
</pre>
