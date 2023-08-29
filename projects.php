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
                <li><a href="intro.php">My intro</a></li>
                <li><a href="services.php">Feedback</a></li>        
                <li><a href="projects.php" id="active">Projects</a></li>
                <li><a href="contact.php">Contact Me</a></li>
            </ul>
        </nav>
    </div>
    <div class="main">
      <div class="hamburger">
        <img class="ham" src="hamburger.png" alt="hamburger"width="23">
        <img class="cross" src="cross.png" alt="cross"width="23">
    </div>
      <div class="projects">
        
        <div class="project">
          
          <div class="projectinfo"><a href="https://www.github.com/AryanAKG" target="_blank"><span class="heading"><strong><u>Tic Tac Toe Game</u></strong></span></a><br>
          <br>
          Tools & technologies used:<b> HTML,CSS,JavaScript</b><br>
        
          </div>
          <div class="projecticon">
            <video src="video1.mp4" width="300px" height="250px" controls autoplay muted></video>
          </div>
          </div>
          
          <div class="project">
          
            <div class="projectinfo"><a href="https://www.github.com/AryanAKG" target="_blank"><span class="heading"><strong><u>Programming Contests Website</u></strong></span></a><br>
            <b>Project description</b>(It is a website that fetch real-time details of ongoing Programming Contests from API and shows it to the user.)<br>
            Tools & technologies used:<b> HTML,Bootstrap,JavaScript and PHP</b><br>
             More description on the project(It offers a switch to dark-mode, real-time clock and a different programming quote
            on every refresh)
            </div>
            <div class="projecticon">
              <video src="video2.mp4" width="300px" height="250px" controls autoplay muted></video>
            </div>
            </div>

            <div class="project">
          
              <div class="projectinfo"><a href="https://www.github.com/AryanAKG" target="_blank"><span class="heading"><strong><u>Calculator</u></strong></span></a><br>
              <b>Project description</b>(This calculator is capable of performing addition, subtraction, multiplication, division, remainder, clear and delete.)<br>
              Tools & technologies used:<b> HTML,CSS,JavaScript</b><br>
              
              </div>
              <div class="projecticon">
                <video src="video3.mp4" width="300px" height="250px" controls autoplay muted></video>
              </div>
              </div>
            
              <div class="project">
          
              <div class="projectinfo"><a href="https://www.github.com/AryanAKG" target="_blank"><span class="heading"><strong><u>Notes writing website</u></strong></span></a><br>
              <b>Project description</b>(It is a website that offers facility to write, delete and search notes to the user.)<br>
              Tools & technologies used:<b> HTML,Bootstrap,JavaScript</b><br>
              
              </div>
              <div class="projecticon">
                <video src="video4.mp4" width="300px" height="250px" controls autoplay muted></video>
              </div>
              </div>

              <div class="project">
          
                <div class="projectinfo"><a href="https://www.github.com/AryanAKG" target="_blank"><span class="heading"><strong><u>E-Commerce Website</u></strong></span></a><br>
                <b>Project description</b>(It is a website that provides seamless expirience to the user. It is basically a prototype completely made of using CSS and JavaScript.)<br>
                Tools & technologies used:<b> HTML,JavaScript and PHP</b><br>
                 More description on the project(It offers a switch to dark-mode)
                </div>
                <div class="projecticon">
                  <video src="video5.mp4" width="300px" height="250px" controls autoplay muted></video>
                </div>
                </div>

      </div>

    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>