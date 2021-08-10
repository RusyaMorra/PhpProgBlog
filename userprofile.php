
<!--db -->
<?php  require'db.php';   ?>
<!--db end -->
<?php require 'config.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['title'] ?></title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="shortcut icon" href="img/PikPng.com_analytics-icon-png_1331301.png" type="image/x-icon">
</head>
<body>
   
<!--header -->
<?php  require'header.php';   ?>
<!--header end -->
    








<section class="profile">
    <div class="container">
        <div class="wrapperprofile">
            <div class="profilenamemailid">
                <div class="wrapper__inner">
                    <img src="img/hacker.png" alt="" width="70px">
                    <div class="nameandemail">
                        <div class="name">Rusya Morra</div>
                        <div class="email">asdasdasd@mail.ru</div>
                    </div>
                </div>
            </div>
            <hr>
            <form   id="profileform" action="" method="post" class="form__profile" enctype="multipart/form-data">
                                
                                <h1 id="redcolor" class="h1reg">Create your own post.</h1>
                                <p class="preg">Create post.</p>
                            
                                
                                <label for="Title"><b class="titlestyle">Title</b></label>
                                <input type="text" placeholder="Enter Title" name="title" required>
                            
                            
                                <label for="Post_text"><b class="Post_text">Post text</b></label>
                                <textarea class="textarea1" name="textarea" id="textarea" placeholder="Your text"></textarea>
                            
                                <select   name="category" id="">


                        
                                <option>category</option>
                                <option>Frontend</option>
                                <option>Backend</option>
                                <option>MobileDev</option>
                                <option>GameDev</option>
                                <option>Tools</option>
                                <option>Cybersecurity</option>
                                <option>DeckstopDev</option>
                                <option>Comp.Sciense</option>
                               
                      
                              </select>
                              <input type="file" name="f">
                                
                                <button type="submit" class="registerbtn">Sign in</button>
                                
                            
                            
                        
            </form>
            <hr>
        </div>
       
        <div class="postsbyautor">

        </div>

    </div>
</section>















<!--footer -->
<?php  require'footer.php';   ?>
<!--footer end -->
   
</body>
</html>