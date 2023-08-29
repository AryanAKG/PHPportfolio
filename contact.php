<?php
 $insert=false;
 if(isset($_POST['submit'])){
   
   include 'partials/_dbconnect.php';
   $name = $_POST['name'];
   $reason = $_POST['reason'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];


   $sql = "INSERT INTO `portfolio` (`name`, `email`, `phone`, `reason`, `gender`, `address`, `dt`) VALUES ('$name', '$email', '$phone', '$reason', '$gender', '$address', current_timestamp())";
    
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="intro.php">My intro</a></li>
                    <li><a href="services.php">Feedback</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="contact.php" id="active">Contact Me</a></li>
                    <li><a href="https://www.linkedin.com/in/aryan-deep-saxena-283500227/" target="_blank" ><img src="ins.png" alt="linkedin" class="icon"></a></li>
                    <li><a href="https://www.instagram.com/aryan_d_saxena/" target="_blank" ><img src="li.jpg" alt="instagram" class="icon"></a></li>
                </ul>
            </nav>
        </div>
        <div class="mainContact">
            <div class="hamburger">
                <img class="ham" src="hamburger.png" alt="hamburger"width="23">
                <img class="cross" src="cross.png" alt="cross"width="23">
            </div>
            <h2>Contact Form</h2>
            <?php
               if($insert == true){
                  echo "<p style='color:green; text-align:center;'>Your form has been submitted successfully.</p>";
               }
            ?> 
            <div class="formm">
                <form id="form" class="form" action="contact.php" method = "post">
                    <div class="formControl">
                    <label for="name">Name : </label>
                    <input  name = "name" id="name" type="text" size="20" placeholder="enter your full name" required><br><br><br>
                    </div>
                    <div class="formControl">
                    <label for="email">Email : </label>
                    <input  name="email" id="email" type="email" size="30" placeholder="enter your email-id" required><br><br><br>
                    </div>
                    <div class="formControl">
                    <label for="phone">Contact Number : </label>
                    <input  name="phone" id="phone" type="number" minLength="10" maxLength="10" placeholder="enter your contact no." required><br><br><br>
                    </div>
                    <div class="formControl success">
                    <label for="reason">Reason : </label>
                    <input name = "reason" id="reason" type="text" placeholder="your reason to contact" required><br><br>
                    </div>
                    <div class="formControl success">
                    <label for="gender">Gender :</label>
                    <select name="gender" id="gender" name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select><br><br>
                    </div>
                    <div class="formControl success">
                    <label for="address">Address : </label>
                    <input name = "address" id="address" type="text" placeholder="enter your address"><br><br>
                    <input type="checkbox" id="v1" name="v1">
                    <label for="v1"> I am a Student</label><br>
                    <input type="checkbox" id="v2" name="v2">
                    <label for="v2"> I am a Working Professional</label><br>
                    <input type="checkbox" id="v3" name="v3">
                    <label for="v3"> I am a Client</label><br><br>
                    </div>
                    <button type="submit" name="submit" class="btn">Submit</button>
                </form>
            </div>
            
        </div>
    </div>
    <script src="script.js"></script>
    
</body>

</html>