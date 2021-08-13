


<?php
session_start();


?>

<?php require 'config.php';

require 'db.php';  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title'] ?></title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="shortcut icon" href="img/PikPng.com_analytics-icon-png_1331301.png" type="image/x-icon">
</head>
<body>
   
<!--header -->
<?php  require'header.php';   ?>
<!--header end -->
    








<section class="profile">
    <div class="container">
        <div id="idanchor" class="wrapperprofile">
            <div class="profilenamemailid">
                <div class="wrapper__inner">
                    <img src="img/hacker.png" alt="" width="70px">
                    <div class="nameandemail">
                        <div class="name"><?php echo $_SESSION['user']['author_name']  ?></div>
                        <div class="email"><?php echo $_SESSION['user']['email']  ?></div>
                    </div>
                </div>
                
            </div>
            <hr>
            <form   id="profileform" action="insertpost/insertpost.php  #idanchor" method="post" class="form__profile" enctype="multipart/form-data">
                                
                                <h1 id="redcolor" class="cretitl">Create your own post.</h1>
                               
                            
                                
                                <label class="acc" for="Title"><b class="titlestyle">Title</b></label>
                                <input type="text" placeholder="Enter Title" name="title" required>
                            
                            
                                <label class="acc" for="Post_text"><b class="Post_text">Post text</b></label>
                                <textarea class="textarea1" name="textarea" id="textarea" placeholder="Your text"></textarea>
                                <label class="acc" for="Post_text"><b class="Post_text">choose your category</b></label>
                                <select   name="category" id="">


                        
                                <option selected="true" disabled="disabled">category</option>
                                <option>Frontend</option>
                                <option>Backend</option>
                                <option>MobileDev</option>
                                <option>GameDev</option>
                                <option>Tools</option>
                                <option>Cybersecurity</option>
                                <option>DeckstopDev</option>
                                <option>Comp.Sciense</option>
                               
                      
                              </select>
                              <label class="acc" for="Post_text"><b class="Post_text">Upload a picture</b></label>
                              <input type="file" class="ss" name="file">
                                
                                <button type="submit" class="btnsumpostinsert">To publish</button>
                                
                                
                                  <div class=" wrapsessinmassage">    <?php
                                        if ($_SESSION['massage'] ){
                                            echo  '<p class="error__massage">' .$_SESSION['massage'] . '</p>';
                                        }
                                        if ($_SESSION['massageupload'] ){
                                            echo  '<p class="error__massage">' .$_SESSION['massageupload'] . '</p>';
                                        }
                                        
                                        if ($_SESSION['massagesuccess'] ){
                                            echo  '<p class="success__massage">' .$_SESSION['massagesuccess'] . '</p>';
                                        }
                                        
                                        unset($_SESSION['massage'] );
                                        unset($_SESSION['massagesuccess'] );
                                        unset($_SESSION['massageupload'] );

                                        ?>
                                        </div>
                            
                            
                        
            </form>
            <hr>
        </div>
          <h1 class="textmyposts">Your posts down there!<img src="img/arrowdown.png" width="35px"></h1>
        <div class="postsbyautor">
        <?php

                  $idauthorprof= $_SESSION['user']['id'];
        
                   $id = isset($_GET['main.php?id=']) ? $_GET['main.php?id=']: 1 ;
                   $limit = 4 ;
                   $offset =  $limit * ($id -1);
                   $Posts = get_Posts_by_author_id_profile($idauthorprof,$limit,$offset);

                   
                   foreach( $Posts as $single ): ?>
                    <?php 
                     $category_name  = get_category_by_id(  $single[category_id]);
                    
                      $author_name =  get_author_by_id($single[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/userprofile.php'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $single["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $single["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $single["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $single["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($single["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($single["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $single["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $single["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>
        </div>

    </div>
</section>















<!--footer -->
<?php  require'footer.php';   ?>
<!--footer end -->
   
</body>
</html>