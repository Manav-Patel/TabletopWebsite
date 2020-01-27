<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Tabletop Club Login
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1" >


        
    </head>
    
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="images/logo.png" alt="tabletop logo">
                    <h1 style="color: white;">UTSC TABLETOP CLUB</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="games.php">GAMES</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="feedback.php">FEEDBACK</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="loginbox">
                    <h1 style="text-align: center; font-size: 35px;">User Login</h1><br>
                    <form name="loginform" action="" method="post">
                        <input type="text" name="username" placeholder="Username" required=""><br><br>
                        <input type="password" name="password" placeholder="Password" required=""><br><br>
                        <button name=submit>Login</button><br><br>
                    </form>
                    <p style="color: white;">
                        <a style="color: white;" href="">Forgot Password?</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                        New to the club?  <a style="color: white;" href="registration.php">Sign Up</a>
                    </p>
                </div>
            </section>
            <footer>

            </footer>
        </div>

    <?php

        if(isset($_POST['submit'])){
            $count=0;
            $res=mysqli_query($db, "SELECT * FROM `member` WHERE username='$_POST[username]' AND password='$_POST[password]';");
            $count=mysqli_num_rows($res);

            if($count==0){
                ?>
                <script type="text/javascript">
                    alert("The username and password does not match");
                </script>
                <?php
            } else {
                ?>
                <script type="text/javascript">
                    window.location="home.php"
                </script>
                <?php
            }
        }
    ?>
    </body>
</html>