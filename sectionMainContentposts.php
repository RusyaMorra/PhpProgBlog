<section class="section__main">
        <div class="container">
            <div class="wrapper__main">
                <div class="content__part">
                   


                


              


                     
               
  











                 
                 
                   <?php
                   $Posts = get_Posts_all();


                   foreach( $Posts as $single ): ?>
                    <?php 
                     $category_name  = get_category_by_id(  $single[category_id]);
                    
                      $author_name =  get_author_by_id($single[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php'){ ?>
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

                   
 


              

                            
                                





                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(1);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%201'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>
                    
                    
                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(2);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%202'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>


                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(3);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%203'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(4);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%204'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(5);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%205'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(6);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%206'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(7);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%207'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                     <?php
                   $Postscateg1 = get_Posts_all_where_cat_categoryid(8);


                   foreach(  $Postscateg1 as $categ1 ): ?>
                    <?php 
                     $category_name  = get_category_by_id(   $categ1[category_id]);
                    
                      $author_name =  get_author_by_id( $categ1[author_id]);
                      
                    ?>
                  <?php  if($_SERVER['REQUEST_URI'] == '/main.php?category=%208'){ ?>
                    <div  data-aos="zoom-in" class="info__box">
                    <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage">   <button class="read">READ</button></a>
                       <div class="content__area">
                           
                           <img src="<?php echo $categ1["img"]; ?>" alt="" class="box__img">
                           <div class="textcontent__box">
                               <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                     <a href="postPage.php?id= <?php echo $categ1["id"]; ?>" class="linktothesecondpage"><div class="article"><?php echo $categ1["title"]; ?></div></a>
                                    <div class="description"><?php  echo $string = substr($categ1["text"],0,350);  ?>........</div>
                                 </div>
                                 <div class="down__items">
                                     <div class="wrapper__items">
                                         <div class="items__two">
                                            <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px"> <?php echo $author_name ?></div>
                                            <div class="data"> <img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($categ1["date"]));  ?></div>
                                        </div>
                                        <div class="items__two">
                                            <div class="views">  <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $categ1["views"]; ?></div>
                                            <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $categ1["comments"]; ?></div>
                                        </div>
                                     </div>
                                 </div>
                           </div>
                       </div>
                    </div>
                    <?php  } ?>
                     <?php endforeach?>

                   
 





























                                
                               


                </div>
