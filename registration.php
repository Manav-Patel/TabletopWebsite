<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Tabletop Club Registration
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
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <div class="registrationbox">
                    <h1 style="text-align: center; font-size: 35px;">User Login</h1><br>
                    <form name="registration" action="" method="post">
                        <input type="text" name="first" placeholder="First Name" required=""><br><br>
                        <input type="text" name="last" placeholder="Last Name" required=""><br><br>
                        <input type="text" name="username" placeholder="Username" required=""><br><br>
                        <input type="password" name="password" placeholder="Password" required=""><br><br>
                        <input type="text" name="email" placeholder="Email" required=""><br><br>
                        <button name="create">Create Account</button><br><br>
                    </form>
                </div>
            </section>
            <footer>
            </footer>
        </div>
    

    <?php 
        if(isset($_POST['create'])){
            $count=0;
            $sql="SELECT username FROM `member`";
            $res=mysqli_query($db, $sql);

            while($row=mysqli_fetch_assoc($res)){
                if($row['username']==$_POST[username]){
                    $count=$count+1;
                }
            }
            if($count==0){
                mysqli_query($db, "INSERT INTO `MEMBER` VALUES('$_POST[first]', 
                                                               '$_POST[last]', 
                                                               '$_POST[username]', 
                                                               '$_POST[password]', 
                                                               '$_POST[email]');");
    ?>
                <script type="text/javascript">
                    alert("Registration Successful");
                </script>            
    <?php        
            } else {
    ?>
                <script type="text/javascript">
                    alert("Username is already being used");
                </script> 
    <?php
            }


        }                                                  
    ?>
    </body>
</html>