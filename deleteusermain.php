<?php
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile == true) {
} else {
    header("location:loginpage.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Realm</title>
    <link rel="icon" type="image" href="realm.png">
    <link rel="stylesheet" href="css/deleteusermain.css">
</head>
<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="admin.php">Home</a></button>
                <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="bookadmin.php">Books</a>
          <a href="res.php">Restaurants</a>
          <a href="movieadmin.php">Movies</a>
          <a href="appadmin.php">Apps</a>
          <a href="petadmin.php">Pets</a>
          <a href="clothingadmin.php">Clothing</a>
          <a href="traveladmin.php">Travels</a>
          <a href="placeadmin.php">Place</a>
        </div>
      </li>
              </li>
          <li class="dropdown">
            <button><a href="adminprofile.php">Admin Profile</a></button>
            </div> 
          </li>
         <!-- <li class="dropdown">
            <button><a href="register.html">Register</a></button>
            </div> -->
          </li>
          </li>
        </ul>
      </nav>
        <div style="padding: 20px; background-color: #062900;color: white; text-align: center; align-items: center;
        border-bottom-left-radius: 200px; border-bottom-right-radius: 200px; border-bottom: white;">
            <h1>DELETE USER</h1>
        </div>
        <div class="books">
            <form action="deleteuser.php" method="post" class="forms">
               
                <br><br><div class="newme"><label for="textarea">username:</h1></label><br><br>
                <input type="text" id="name" name="username"><br><br></div>
                <!-- <textarea id="area" name="textarea" rows="10" cols="150" required placeholder="write your review here......."></textarea><br> -->
                
                <div class="sub"><button type="submit" id="sub">Delete User</button></div>
            </form>
        </div>
   
        <div>

    <footer class="footer" style="margin-top:40%">
        <div class="box1">
            <a href="contact1.html">Contact us</a><br>
        </div>
        <div class="box2"> <a href="aboutus.html">About us</a></div>
        <div class="box3">
            <p>Share your thoughts on our website to enhance your experience. <br>Join us on social media and be part of our
                journey to excellence.<br> Thanks for your contribution!</p>
        </div>

    </footer>
</body>

</html>