<?php


session_start();
require_once '../db.php';




$title = $_POST['title'];
$textarea = $_POST['textarea'];
$category = $_POST['category'];
$author_id = $_SESSION['user']['id'];
$date = date("Y.m.d H:i");
$file = $_FILES['file'];
$path = 'uploadfile/'. time().  $_FILES['file']['name'];

if (!empty( $title) && !empty($textarea) && !empty( $category) ){
     
    if(!move_uploaded_file( $_FILES['file']['tmp_name'],'../' .$path)){
       $_SESSION['massageupload'] = 'Uploud error';
       header('location: ../userprofile.php');
    }else{
       
    insert_post($title,$textarea,$path,$date,$category,$author_id);
    $_SESSION['massagesuccess']= 'Public was successful!';
    header('location: ../userprofile.php');

    }
}else{
    $_SESSION['massage'] = 'fields are empty!!!' ;
   
}

  







?>