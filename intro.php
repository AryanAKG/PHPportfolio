<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'partials/_dbconnect.php';?>
    <div class="container">
        
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="intro.php" id="active">My intro</a></li>
                    <li><a href="services.php">Feedback</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php">Contact Me</a></li>
                </ul>
            </nav>
        </div>
        <div class="main">
            <div class="hamburger">
                <img class="ham" src="hamburger.png" alt="hamburger"width="23">
                <img class="cross" src="cross.png" alt="cross"width="23">
            </div>
            <div class="intro1">

                <div>Hello, My name is Aryan and I am a Bachelor of Technology in Information
                    Technology(2020-24) from Ajay Kumar Garg Engineering College, Ghaziabad U.P. I am a passionate Web
                    Developer and have developed many projects including personal websites, games, calculator and notes
                    writing website using HTML, CSS, Bootstrap, JavaScript, PHP, MySQL. I do problem solving and
                    competitive programming as well on various platforms like Hackerrank and CodeChef.</div>


            </div>
            <div class="intro2">
                <p>HTML</p>
                <div class="cont">
                    <div class="skills html">90%</div>
                </div>

                <p>CSS</p>
                <div class="cont">
                    <div class="skills css">80%</div>
                </div>

                <p>JavaScript</p>
                <div class="cont">
                    <div class="skills js">65%</div>
                </div>

                <p>PHP</p>
                <div class="cont">
                    <div class="skills php">60%</div>
                </div>

                <p>MySQL</p>
                <div class="cont">
                    <div class="skills sql">80%</div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>