
<body>
    


    
    <header class="header1">
        
        <div class="container">
            
            <div class="wrapper">
           <a href="/main.php" class="logo">
                <img class="img__logo" src="img/PikPng.com_analytics-icon-png_1331301.png" alt="" width="60px">
            </a>
            


          <?php
            $category = get_category_by_id_header(1);
            $category2 = get_category_by_id_header(2);
            $category3 = get_category_by_id_header(3);
            $category4 = get_category_by_id_header(4);
            $category5 = get_category_by_id_header(5);
            $category6 = get_category_by_id_header(6);

          ?>

          <?php
           $categoryid=get_category_id(1);
           $categoryid2=get_category_id(2);
           $categoryid3=get_category_id(3);
           $categoryid4=get_category_id(4);
           $categoryid5=get_category_id(5);
           $categoryid6=get_category_id(6);
           

          ?>


           
            <ul class="menu__items">
               
            
            
                <a href="main.php?id= <?php echo $categoryid["id"]; ?>"> <li class="menu__item"><?php echo $category; ?></li> </a>
                <a href="main.php?id= <?php echo $categoryid2["id"]; ?>"> <li class="menu__item"><?php echo $category2; ?></li> </a>
                <a href="main.php?id= <?php echo $categoryid3["id"]; ?>"> <li class="menu__item"><?php echo $category3; ?></li> </a>
                <a href="main.php?id= <?php echo $categoryid4["id"]; ?>"> <li class="menu__item"><?php echo $category4; ?></li> </a>
                <a href="main.php?id= <?php echo $categoryid5["id"]; ?>"> <li class="menu__item"><?php echo $category5; ?></li> </a>
                <a href="main.php?id= <?php echo $categoryid6["id"]; ?>"> <li class="menu__item"><?php echo $category6; ?></li> </a>
                <!--  <li class="menu__item">DeckstopDev</li>
                <li class="menu__item">ComputerSciense</li>!-->
                <li id="popmenu" class="menu__item1 "> <img src="img/icons8-меню-50.png" alt="" width="15px"> All categories </li>
            </ul>
            <div class="search__wrapper2">
                <input class="search__input2" type="search" id="site-search" name="q"
                    aria-label="Search through site content" placeholder="Search">
                <button class="btn2">Search</button>
            </div>
            <div id="menu" class="menumore">
                <a href="" class="menu_initem">Profile</a>
                <a href="" class="menu_initem">DeckstopDev</a>
                <a href="" class="menu_initem">Comp.sciense</a>
                <a href="vendor/logout.php" class="menu_initem">Exit</a>
            </div>
             </div>
            
        </div>
        
    </header>    