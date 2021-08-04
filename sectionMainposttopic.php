<section class="section__main">
        <div class="container">
            <div class="wrapper__main">
                <div class="content__part">
                  
                   







                       <?php    views_update($_GET['id']);      ?>

                       <?php $post = get_Post_by_id($_GET['id']);?>

                       <?php  $category_name  = get_category_by_id(  $post[category_id]);?>
                    
                       <?php  $author_name =  get_author_by_id($post[author_id]);?>
                    <div class="info__box">
                       
                       <div class="content__area">
                          
                           <div class="textcontent__box">
                                <div class="categ__article__descri">
                                    <div class="categoris"><?php echo $category_name; ?></div>
                                    <div class="article"><?php echo $post["title"]; ?></div>
                            
                                </div>
                        
                                <div class="down__items">
                                    <div class="wrapper__items">
                                        <div class="items__two">
                                        <div class="avthor"> <img class="author__img" src="img/hacker.png" alt="" width="15px">  <?php echo $author_name ?></div>
                                        <div class="data"><img class="calendar" src="img/calendar.png" alt="" width="15px"> <?php echo date("d.m.Y в H:i", strtotime($post["date"]));  ?></div>
                                    </div>
                                    <div class="items__two">
                                        <div class="views"> <img class="views__img" src="img/397eye_100362.png" alt="" width="15px"> <?php echo $post["views"]; ?></div>
                                        <div class="comments"> <img class="comments__img" src="img/comment_icon-icons.com_74433.png" alt="" width="15px"> <?php echo $post["comments"]; ?></div>
                                    </div>
                                    </div>
                                </div>
                              
                           </div>
                           <div class="description">  <img src="<?php echo $post["img"]; ?>" alt="" class="box__img"><?php  echo $string = substr($post["text"],0,10000);  ?></div>
                        </div>
                        </div>
                        <div class="tags__area">
                             <div class="tags__text"><img src="img/tag-icon_34341.png" alt="" width="13px"> Tags:</div>
                             <div class="tag__wrapper">
                                <div class="tag">Api</div>
                                <div class="tag">Tiuring</div>
                                <div class="tag">Html</div>
                                <div class="tag">qwerty</div>
                                <div class="tag">backend</div>
                                <div class="tag">oo</div>
                                <div class="tag">oop</div>
                                <div class="tag">gg</div>
                                <div class="tag">git</div>
                                <div class="tag">atom</div>
                                <div class="tag">rest</div>
                                <div class="tag">Makintosh</div>
                            </div>
                        </div>
                        <div class="comments__area1">
                            <div class="social">
                                <div class="textsoc">To share in social media:</div>
                                <div class="dws-button dws-facebook"><a href="https://www.facebook.com/DWstroy-1415456785391372/" target="_blank">
                                   <div class="dws-share"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                   <div class="dws-text">51</div>
                                </a></div>
                                <div class="dws-button dws-vk"><a href="https://vk.com/dwstroy" target="_blank">
                                   <div class="dws-share"><i class="fa fa-vk" aria-hidden="true"></i></div>
                                   <div class="dws-text">730</div>
                                </a></div>
                                <div class="dws-button dws-twitter"><a href="#">
                                   <div class="dws-share"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                   <div class="dws-text">0</div>
                                </a></div>
                                <div class="dws-button dws-youtube"><a href="https://www.youtube.com/channel/UCTgx8cZRD5Jz2_zGaT27S3w" target="_blank">
                                   <div class="dws-share"><i class="fa fa-youtube" aria-hidden="true"></i></div>
                                   <div class="dws-text">1299</div>
                                </a></div>
                                <div class="dws-button dws-odnoklassniki"><a href="#">
                                   <div class="dws-share"><i class="fa fa-odnoklassniki" aria-hidden="true"></i></div>
                                   <div class="dws-text">0</div>
                                </a></div>
                                <div class="dws-button dws-envelope-o"><a href="mailto:admin@dwstroy.ru">
                                   <div class="dws-share"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                                   <div class="dws-text">0</div>
                                </a></div>
                             </div>    
                             <div class="sumscribe__note">
                                 <div class="box__leftnotetext">Get the best by email:</div>
                                 <div class="box__rightnotetext">
                                         
                                         <form action="" class="form1__inputcackbox">
                                            <div class="aa">
                                                <input class="bbinput" type="text" placeholder="Email">
                                                <button class="btnnote" type="submit">Subscribe</button>
                                            </div>
                                         
                                            <div class="dd">
                                                <label >
                                                    <input class="nn" type="checkbox" checked="checked">
                                                    <span class="checkmark">For all articles</span>
                                                </label>
                                                
                                                 <label >
                                                    <input  class="nn" type="checkbox">
                                                    <span class="checkmark">This topic</span>
                                                </label>
                                            </div>
                                         
                                       

                                         </form>
                                     
                                 </div>

                             </div>
                             <div class="comments__form">
                                <form action="./" method="post" class="frm__comments">
                                    
                                    <div class="lb__wrapper">
                                        <label for="comment">Comments(5) </label>
                                    </div>
                                    <div class="txter__Wrapper">
                                        <textarea class="mm" name="comment" id="comment" placeholder="Your text"></textarea>
                                    
                                        <button class="btntextare" type="submit">Publish</button>
                                    </div>
                                </form>
                                <div class="commentshere">
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(2)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(0)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(5)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(4)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(0)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment__box">
                                        <div class="imgprofile"><img src="img/hacker.png" width="70px" alt=""></div>
                                        <div class="text__contentcomments">
                                            <div class="person__data">
                                                <div class="comment__athorname">Rusya__morra</div>
                                                <div class="comment__data"> 24.07.21 in 15:00</div>
                                            </div>
                                            <div class="textarea__comments">
                                                Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or 
                                                to perform a specific task. Programming involves tasks such as: analysis, generating algorithms,
                                                 profiling algorithms' accuracy and resource consumption, and the implementation of algorithms in a 
                                                 chosen programming language (commonly referred to as coding).
                                            </div>
                                            <div class="button__answerandlike">
                                                <button class="answer">Answers(0)</button>
                                                <div class="like_dislike">
                                                   <button class="like">Like</button>
                                                   <button class="dislike">Dislike</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                             </div>
                        </div>
                    </div>
