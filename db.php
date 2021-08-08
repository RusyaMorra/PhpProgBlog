<?php

//users online


session_start();
//выделяем уникальный идентификатор сессии
$id = session_id();

if ($id!="") {
 //текущее время
 $CurrentTime = time();
 //через какое время сессии удаляются
 $LastTime = time() - 600;
 //файл, в котором храним идентификаторы и время
 $base = "session.txt";

 $file = file($base);
 $k = 0;
 for ($i = 0; $i < sizeof($file); $i++) {
  $line = explode("|", $file[$i]);
   if ($line[1] > $LastTime) {
   $ResFile[$k] = $file[$i];
   $k++;
  }
 }

 for ($i = 0; $i<sizeof($ResFile); $i++) {
  $line = explode("|", $ResFile[$i]);
  if ($line[0]==$id) {
      $line[1] = trim($CurrentTime)."\n";
      $is_sid_in_file = 1;
  }
  $line = implode("|", $line); $ResFile[$i] = $line;
 }

 $fp = fopen($base, "w");
 for ($i = 0; $i<sizeof($ResFile); $i++) { fputs($fp, $ResFile[$i]); }
 fclose($fp);

 if (!$is_sid_in_file) {
  $fp = fopen($base, "a-");
  $line = $id."|".$CurrentTime."\n";
  fputs($fp, $line);
  fclose($fp);
 }
}
?>


<?php
require "config.php";

$dbhost = $config['db']['server'];
$dbname = $config['db']['name'];
$username =$config['db']['username'];
$password = $config['db']['password'];


$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];



try {
    $db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username,$password);
     "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}




//get whole bunch of posts 

function get_Posts_all(){
    global  $db;
   $Posts =  $db->query("SELECT * FROM posts");
   return $Posts;
}

//get post by ID

function get_Post_by_id($id){
    global  $db;
   $Posts = $db->query("SELECT * FROM posts WHERE id=$id");
   foreach($Posts as $Post){
   return $Post;
   }
}





//get category by ID

function get_category_by_id($id){
    global  $db;
   $categories =  $db->query("SELECT * FROM categories WHERE id=$id");
   foreach($categories as $category){
   return $category["category_name"];
   }
}

//get author by ID

function get_author_by_id($id){
    global  $db;
   $authors =  $db->query("SELECT * FROM author WHERE id=$id");
   foreach( $authors as $author){
   return $author["author_name"];
   }
}






//APDATE views by ID

function views_update($id){
    global  $db;
    $db->query("UPDATE posts SET views = views + 1 WHERE id=$id");
 
}








//get category by ID for header

function get_category_by_id_header($id){
    global  $db;
   $categoriesfront =  $db->query("SELECT * FROM categories WHERE id=$id");
   foreach( $categoriesfront as $category){
   return $category["category_name"];
   }
}
//get category ID 

function get_category_id($id){
    global  $db;
   $categoriesid =  $db->query("SELECT * FROM categories WHERE id=$id");
   foreach( $categoriesid as $categoryid){
   return $categoryid;
   }
}






//sort by views

function sort_by_views(){
    global  $db;
   $popular =  $db->query("SELECT * FROM posts ORDER BY views DESC LIMIT 4");
   return   $popular;
}
//last id

function last_id(){
    global  $db;
   $lastid =  $db->query("SELECT MAX(`id`) FROM `posts` ");
  
   foreach( $lastid as $last){
    return $last;
    }
 
}




//last author

function last_author(){
    global  $db;
   $lastauthor =  $db->query("SELECT MAX(`id`) FROM `author` ");
  
   foreach($lastauthor as $lastuser){
    return $lastuser;
    }
 
}


