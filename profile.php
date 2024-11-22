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
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
<nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        
        <ul>
            
        <li class="dropdown">
                <button><a href="home1.php">Home</a></button>
              </li>
      <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="Write/book.php">Books</a>
          <a href="Write/res.php">Restaurants</a>
          <a href="Write/movie.php">Movies</a>
          <a href="Write/app.php">Apps</a>
          <a href="Write/pet.php">Pets</a>
          <a href="Write/clothing.php">Clothing</a>
          <a href="Write/travel.php">Bank</a>
          <a href="Write/place.php">Place</a>
        </div>
      </li>
          <li class="dropdown">
            <button><a href="profile.php">Profile</a></button>
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
            <h1>Your Profile</h1>
        </div>
    
    <div class="content">
    <table class="tables">
        <tr class="tables">
            <?php
            //     include("db.php");
            // //    session_start();
            // //    $username=$_SESSION['username'];
            //     $sql= mysqli_query($conn,"SELECT *FROM `reviewdata` where `username`=$userprofile");
            //     $row= mysqli_num_rows($sql);
            //     // $id=$_GET['imaging'];

            //     if($row!=1){
            //         while($data= mysqli_fetch_assoc($sql)){
            //             echo "<img src='$data[images]' height= 150px; width= 150px;> ";
            //         }
            //     }
            ?>
            <img src="images/User.jpg"  style="height: 180px; width: 200px; border-radius:100%;">
        </tr>
    <tr class="names">
        <td>
            Name:
        </td>
        <td>
            <?php
            include "db.php";
             $sql=mysqli_query($conn,"SELECT `username` FROM `reviewdata` WHERE `email`='$userprofile'");
             $row=mysqli_num_rows($sql);
             if($row>0){
                $rata=implode(mysqli_fetch_assoc($sql));
                echo $rata;
             }
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td>
            <?php
            include "db.php";
             $sql=mysqli_query($conn,"SELECT `email` FROM `reviewdata` WHERE `email`='$userprofile'");
             $row=mysqli_num_rows($sql);
             if($row>0){
                $rata=implode(mysqli_fetch_assoc($sql));
                echo $rata;
             }
            ?>
        </td>
    </tr>
    </table>
  <button type="submit" id="logout"><a href="logout.php">LOGOUT</a></button>

        </div>


      
    <footer class="footer" >
        <div class="box1">
            <a href="contact1.html">Contact us</a><br>
        </div>
        <div class="box2"> <a href="aboutus.html">About us</a></div>
        <div class="box3">
            <p>Share your thoughts on our website to enhance your experience.<br> Join us on social media and be part of our
                journey to excellence.<br> Thanks for your contribution!</p>
        </div>

    </footer>
</body>

</html>