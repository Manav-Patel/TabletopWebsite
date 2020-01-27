<?php 
    include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Tabletop Club Games
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
                <br><br><br><br>
                <div class="gamestable"><br>
                    <h2 style="font-size:35px">Available Games</h2><br>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Genre</th>
                            <th>Players</th>
                            <th>Difficulty</th>
                            <th>Time</th>
                        </tr>
                        <?php
                        
                            $sql="SELECT * FROM `games`";
                            $result = $db-> query($sql);

                            while($row = $result-> fetch_assoc()){
                                echo "<tr><td>". $row['name']. 
                                     "</td><td>" .$row['genre'].
                                     "</td><td>". $row['players'].
                                     "</td><td>". $row['difficulty'].
                                     "</td><td>". $row['time'].
                                     "</td><td>";
                            }
                        ?>
                    </table>
                </div>
            </section>
            <footer>

            </footer>
        </div>
    </body>
</html>