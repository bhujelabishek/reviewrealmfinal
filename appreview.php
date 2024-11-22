<?php
// session_start();
// $userprofile = $_SESSION['username'];
// if ($userprofile == true) {
// } else {
//     header("location:loginpage.html");
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Realm</title>
    <link rel="icon" type="image" href="realm.png">
    <link rel="stylesheet" href="css/appreview.css">
</head>
<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="home.html">Home</a></button>
               
              <!-- </li>
              <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="book.php">Books</a>
          <a href="res.php">Restaurants</a>
          <a href="movie.php">Movies</a>
          <a href="app.php">Apps</a>
          <a href="pet.php">Pets</a>
          <a href="clothing.php">Clothing</a>
          <a href="travel.php">Travels</a>
          <a href="place.php">Place</a>
        </div>
      </li> -->
          <li class="dropdown">
            <button><a href="loginpage.html">Login</a></button>
            </div>
          </li>
          <li class="dropdown">
            <button><a href="register.html">Register</a></button>
            </div>
          </li>
          </li>
        </ul>
      </nav>
        <div style="padding: 20px; background-color: #062900;color: white; text-align: center; align-items: center;
        border-bottom-left-radius: 200px; border-bottom-right-radius: 200px; border-bottom: white;">
            <h1>Review on App</h1>
        </div>
      
 
<div class="review">
      <?php
            include "db.php";
            $sql = mysqli_query($conn, "SELECT `email`, `bookname`, `reviews`, `review_on` FROM `reviews` WHERE `category`='app'");
            $rows = mysqli_num_rows($sql);
            if ($rows > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                    $email = $row['email'];
                    $appname = $row['bookname'];
                    $review = $row['reviews'];
                    echo"<div class='head'>";
                    echo"<div class='rev'>";
                    echo "<h3>"."Review on " . $appname ."</h3>";
                    echo "<p style='font-size:20px'>".$review ."</p>";
                    echo "<p class='res'>"."Reviewed on ".$row["review_on"].'</p>'.'<br>';
                    echo "<p class='res'>"."By:".$email.'</p>'.'<br>';
                    // echo"<a href='deletemain.php'><button type='submit' class='edit' >DELETE</button></a>";
                    // echo"<a href='updatemain.php'><button type='submit' class='edit' >EDIT</button></a>"."</div>";
                    echo"</div>";
                    echo"</br>";
                }

            }
            ?>
</div>



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