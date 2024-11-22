<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="icon" type="image" href="realm.png">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="home.html">Home</a></button>
               
              </li>
          <li class="dropdown">
            <button><a href="loginpagereal.html">Log in</a></button>
            </div>
          </li>
          <li class="dropdown">
            <button><a href="registerone.php">Register</a></button>
            </div>
          </li>
          </li>
        </ul>
      </nav>
        
    
    <form class="form" action="register.php" method="post" enctype="multipart/form-data"><br><br>
        <label for="register" id="registers">Register</label><br><br>
        <!-- <label for="profile">Choose image for profile pic:</label><br><br>
        <input type="file" name="profile"><br><br> -->
        <label for="username">Username:</label><br><br>
        <input type="text" name="usernam" required id="username" placeholder="Username"><br><br>
        <label for="email">Email:</label><br><br>
        <input type="text" name="emaill" required id="email" placeholder="Email"><br>
        <p class="errorp" style="color: red; font-size:20px;">  
            <?php
            error_reporting(0);
            session_start();
            $error=  $_SESSION['erro'];
            echo $error;
            if($_SESSION['erro']== true){
            $_SESSION['erro']="";
                unset($_SESSION['error']);
            }
            ?></p><br>
        <label for="password">Password:</label><br><br>
        <input type="password" id="password" placeholder="Enter your password" name="pass" required><br>
        <p class="errorp" style="color: red;font-size:20px;">  
            <?php
            error_reporting(0);
            session_start();
            $error= $_SESSION['erorred'];
            echo $error;
            if($_SESSION['erorred']== true){
            $_SESSION['erorred']="";
                // unset($_SESSION['error']);
            }?> </p><br>
        <label for="password">Confirm Password:</label><br><br>
        <input type="password" id="conpassword" placeholder="Confirm your password" name="cpass" required><br>
        <p class="errorp" style="color: red; font-size:20px;">  
            <?php
            error_reporting(0);
            session_start();
            $error= $_SESSION['err'];
            echo $error;
            if($_SESSION['err']== true){
            $_SESSION['err']="";
                // unset($_SESSION['error']);
            }?> </p><br>
        <!-- <input type="file" id="file" accept="image/jpg, image/jpeg, image/png"><br><br><br> -->
        <button type="submit" id="button" onclick="submit">Regsiter</button><br><br>
    </form>
</body>

</html>