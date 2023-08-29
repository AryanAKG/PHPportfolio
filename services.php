<?php
 $insert=false;
 if(isset($_POST['submit'])){
   
   include 'partials/_dbconnect.php';
   $feed = $_POST['feed'];
   $rating = $_POST['rating'];
   $name = $_POST['name'];


   $sql = "INSERT INTO `portfolio_feedback` (`feed`, `rating`, `name`, `dt`) VALUES ('$feed', '$rating', '$name', current_timestamp())";
    
   if($conn->query($sql)== true){
      //echo "Successfully inserted";
      $insert= true;
   }
   else{
      echo "ERROR: $sql <br> $conn->error";
   }

   $conn->close();
 }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        
    <div class="sidebar">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="intro.php">My intro</a></li>
                <li><a href="services.php" id="active">Feedback</a></li>        
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
    <div id="flex">
        <div>
            <h2 style='color:purple; text-align:center; margin: 5px 0px;'>Feedback Form</h2>
            <?php
               if($insert == true){
                  echo "<p style='color:green; text-align:center;'>Thanks for giving feedback.</p>";
               }
            ?> 
        </div>    
        <div> 
                <form action="services.php" method = "post">
                    <div class="formControl">
                    <label for="name">Name : </label>
                    <input  name = "name" id="name" type="text" placeholder="enter your name" required><br><br><br>
                    </div>

                    <div class="formControl">
                    <label for="feed">Feedback : </label>
                    <textarea id="feed" rows="3" name="feed" placeholder="type your feedback" required></textarea>
                    </div><br><br>
                    
                    <div class="formControl">
                    <label for="rating">Give rating(5 for best) :</label>
                    <select name="rating" id="rating" required>
                        <option value="5">5</option>
                        <option value="4">4</option>
                        <option value="3">3</option>
                        <option value="2">2</option>
                        <option value="1">1</option>
                    </select><br><br>
                    </div>
                    
                    <button type="submit" name="submit" class="btn">Submit</button>
                </form>
        </div>
        <div style="height: 40vh; overflow: scroll;">
            <?php
                include 'partials/_dbconnect.php';
                $sql = "SELECT * FROM `portfolio_feedback`";
                
                $result = mysqli_query($conn,$sql);
                if(!$result){
                    echo "Error: " . mysqli_error($conn);
                    exit;
                }
                while($row = mysqli_fetch_assoc($result)){
                
                    echo '<br><strong>Posted by : '. $row["name"] . '</strong><p>Feedback : ' . $row["feed"] . '</p><p><strong>Rating : ' . $row["rating"] . ' stars</strong></p><br><hr>';
                }
                mysqli_close($conn);

            ?>
        </div>    
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>