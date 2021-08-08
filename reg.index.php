<?php session_start(); ?>

<script type="text/javascript" src="//rf.revolvermaps.com/0/0/6.js?i=58ytkmr6j63&amp;
         m=7&amp;c=e63100&amp;cr1=ffffff&amp;f=arial&amp;l=0&amp;bv=90&amp;lx=-420&amp;ly=420&amp;
         hi=20&amp;he=7&amp;hc=a8ddff&amp;rs=80" async="async"></script>
    <section class="log__reg">
        <div class="container">
            <div class="wrapper__reg">

                <form id="registerform" action="vendor/signup.php" method="post" class="form__reg">
                    
                    <h1 id="redcolor" class="h1reg">Register</h1>
                    <p class="preg">Please fill in this form to create an account.</p>
                    <hr>
                
                    <label for="Username"><b class="emailstyle">Username</b></label>
                    <input type="text" placeholder="Enter Username" name="author_name" required>
                    <label for="email"><b class="emailstyle">Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                
                    <label for="psw"><b class="passwordstyle">Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                
                    <label for="psw-repeat"><b class="reppasswordstyle">Repeat Password</b></label>
                    <input type="password" placeholder="Repeat Password" name="password_confirm" required>
                    <hr>
                
                    <p class="bb">By creating an account you agree to our <a href="https://policies.google.com/"> Terms & Privacy</a>.</p>
                    <button type="submit" class="registerbtn">Register</button>
                    
                
                    <div class="container__signin">
                    <p class="alreadyhaveanacc">Already have an account? <a id="btnsgin" href="#">Sign in</a>.</p>
                    </div>
                   <?php
                    if ($_SESSION['massage'] ){
                        echo  '<p class="error__massage">' .$_SESSION['massage'] . '</p>';
                    }
                     
                    unset($_SESSION['massage'] );
                    ?>
                </form>




                <form id="logform" action="action_page.php" class="form__signin">
                    
                    <h1 id="redcolor" class="h1reg">Sign in</h1>
                    <p class="preg">Please fill in this form to login.</p>
                    <hr>
                
                    <label for="Username"><b class="emailstyle">Username</b></label>
                    <input type="text" placeholder="Enter Username" name="Username" required>
                   
                
                    <label for="psw"><b class="passwordstyle">Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                
                    
                
                    
                    <button type="submit" class="registerbtn">Sign in</button>
                    
                
                    <div class="container__signin">
                    <p class="alreadyhaveanacc">Already have no account? <a id="btnregister" href="#">register</a>.</p>
                    </div>
                </form>



         </div>
      
        </div>   
    </section>

  