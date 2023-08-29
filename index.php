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
    <div class="sidebar sidebarGo">
        <nav>
            <ul>
                <li><a href="/" id="active">Home</a></li>
                <li><a href="intro.php">My intro</a></li>
                <li><a href="services.php">Feedback</a></li>        
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact Me</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
        <!-- <div class="infoContainer"> -->
            <div class="hamburger">
                <img class="ham" src="hamburger.png" alt="hamburger"width="23">
                <img class="cross" src="cross.png" alt="cross"width="23">
            </div>
            <div class="devInfo">
                <div class="hello">Hi, My name is</div>
                <div class="name"><span class="heading">Aryan Deep Saxena</span></div>
                <div class="about">and I am a passionate</div>
                <span id="element"></span>
                <div class="buttons">
                    <a href="https://www.github.com/AryanAKG" target="_blank"><button class="btn">Visit Github</button></a>
                    <a href="/Resume.pdf" download><button class="btn">Download CV</button></a>
                </div>
            </div>
            <div class="devPic">
                <img src="Hacker.png" alt="image">
            </div>
        <!-- </div> -->
        
    </div>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- Setup and start animation! -->
  <script>
        var typed = new Typed('#element', {
      strings: ['Student', 'Software Engineer','Web Developer'],
      typeSpeed: 50,
    });
    
    
  </script>
</body>

</html>