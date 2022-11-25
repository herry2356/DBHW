<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' >
    <title>Document</title>

    <!-- <meta http-equiv="refresh" content="1">  -->
</head>
<body>
    <div class="nav">
        <div class="logo">
            <i class='bx bx-menu'></i>
                <img src="logo.png" alt="">
                <a href="index.php"><h3>旅人足跡</h3></a>              
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <ul class="menubar">
                <a href="#">
                    <li class="side-icon">
                        <!-- <img class="avator" src="avator/unknow.png" alt=""> -->
                        <?php      
                            $login="";                   
                            if(isset($_COOKIE["acc"]))
                            {
                                $login=$_COOKIE["acc"]."_login";
                            }
                            if(isset($_SESSION[$login]))
                            {
                                echo "<img class='avator' src='avator/picture.png' alt=''>
                                <div class='innertext'>
                                    <span class='textup'>"
                                        .$_COOKIE["acc"].
                                    "</span>
                                    <span class='textdown'>"
                                        .$_COOKIE["nickname"].
                                    "</span>
                                    <span class='logout'><a href='session_clear.php'>登出</a></span> 
                                </div>";
                            }
                            else
                            {
                                echo "<img class='avator' src='avator/unknow.png' alt=''>
                                <div class='innertext'>
                                <span class='textup'><a href='login_acc.php'>登入帳號</a></span>
                                <span class='textdown'><a href='create_acc.php'>註冊帳號</a></span> 
                                </div>";
                            }
                        ?>
                        
                        <!-- <img class="avator" src="avator/avator.png" alt="">
                        <div class="innertext">
                            <span class="textup">                            
                                好吃鮭魚
                            </span>
                            <span class="textdown">
                                40743209
                            </span>
                        </div> -->
                    </li>
                </a>
                <a href="index.php">
                    <li class="side-icon">                 
                            <i class='bx bx-home'></i>
                            <span class="text">主要頁面</span>             
                    </li>
                </a>
                <a href="selfpost.php">
                    <li class="side-icon">
                        <i class='bx bx-show'></i>
                        <span class="text">檢視貼文</span>
                    </li>
                </a>
                <a href="addpage.php">
                    <li class="side-icon">
                        <i class='bx bx-add-to-queue'></i>
                        <span class="text">發布貼文</span>
                    </li>
                </a>
                <a href="personalpage.php">
                    <li class="side-icon">
                        <i class='bx bxs-cog'></i>
                        <span class="text">
                            個人檔案
                        </span>
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div class="mainframe">
        <div class="box1">
            <!--mainpage-->
            <?php
                require "connectDB.php";
                
		            $sql="select * from post where public =1;";
	            
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc())
	        	{
                        echo "<div class='post'>
                                <div class='post_upper'>
                                     <img class='avator' src=avator/".$row['account'].".jpg alt=''> 
                                    <div class='owner'>
                                        <span class='text'>&nbsp;".$row['account']."</span> 
                                        <span class='date'>發布於:".$row['upload_time']."</span>
                                    </div>                
                                </div>
                                <div class='post_middle'>
                                    <div class='title'>"
                                        .$row['title']."
                                    </div>
                                <div class='article'>"
                                        .$row['article']."
                                </div>
                                </div>
                            <div class='post_under'>
                            </div>
                        </div>";
                }

            ?>
            <!--post-1-->
            <!--
                    <img class="avator" src="avator/avator.png" alt="">
                    <div class="owner">
                        <span class="text">好吃鮭魚</span> 
                        <span class="date">發布於:2022/5/3</span>
                    </div>                
                </div>
                <div class="post_middle">
                    <div class="title">
                        Lorem,Testing Text
                    </div>
                    <div class="article">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio perspiciatis voluptates ad magnam beatae consequatur nostrum laborum provident accusantium voluptate dicta assumenda, veniam illo libero. Est suscipit quam possimus quas?
                    </div>
                </div>
                <div class="post_under">       
                </div>
            </div>
            -->
            <!--post-2
            <div class="post">
                <div class="post_upper">
                    <img class="avator" src="avator/avator.png" alt="">
                    <div class="owner">
                        <span class="text">好吃鮭魚</span> 
                        <span class="date">發布於:2022/5/3</span>
                    </div>                         
                </div>
                <div class="post_middle">
                    <div class="title">
                        More Testing Text
                    </div>
                    <div class="article">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit, modi rem? Atque facere cupiditate incidunt tenetur consequatur quod laborum ex saepe facilis? Nemo eveniet dolorum architecto officiis maxime sint adipisci libero quam suscipit odio. Ratione, doloribus eveniet exercitationem nam molestias debitis vero nihil optio inventore perferendis cumque similique? Unde architecto maiores quae facere iste alias amet possimus cumque perferendis omnis saepe, aut non corrupti neque, placeat, nobis voluptatibus accusantium quasi consequatur cum. Facilis, velit ducimus quibusdam, fugiat odio laborum magni eaque quisquam rem quo at eveniet temporibus blanditiis ipsa atque adipisci deserunt corrupti consequuntur porro quod iusto nam? Quos tempore minima obcaecati eius accusamus asperiores doloremque sed eos nisi rerum modi aut, cumque impedit, cum, velit quod ab provident voluptatem nesciunt quisquam consequatur? Molestiae ad, magni doloribus delectus modi quam tempora asperiores minus vel voluptate numquam repudiandae cumque dolor expedita optio recusandae! Modi in, officia voluptatum saepe explicabo, accusantium voluptatibus id reprehenderit vel ea a quisquam alias rerum facilis. Maiores obcaecati ipsum quibusdam repellendus mollitia ut porro maxime unde veritatis repellat. Quis ratione voluptatum inventore. Quidem ad expedita aliquid soluta blanditiis illum dignissimos nostrum quos eos harum ipsam omnis, nesciunt ducimus facere cumque? Culpa dicta voluptatibus laboriosam saepe vero? Iste!
                    </div>
                </div>
                <div class="post_under">       
                </div>
            </div>
            
            mainpage-->
           
        </div>     
    </div>
    <script>

    </script>
    <script src="script.js"></script>
</body>
</html>