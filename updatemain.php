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
    <link rel="stylesheet" href="css/updatemain.css">
</head>
<body>
    <nav>
        <div><h1 style="color: white; margin: 10% 0% 0% 8%;">ReveiwRealm</h1></div>
        <ul>
            
        <li class="dropdown">
                <button><a href="home1.php">Home</a></button>
                <li class="dropdown">
        <button><a>Explore</a></button>
        <div class="dropdown-data">
          <a href="book.php">Books</a>
          <a href="res.php">Restaurants</a>
          <a href="movie.php">Movies</a>
          <a href="app.php">Apps</a>
          <a href="pet.php">Pets</a>
          <a href="clothing.php">Clothing</a>
          <a href="travel.php">Bank</a>
          <a href="place.php">Place</a>
        </div>
      </li>
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
            <h1>Edit reviews</h1>
        </div>
        <div class="books">
            <form action="update.php" method="post" class="forms">
               
                <br><br><div class="newme"><label for="textarea">Write Category</h1></label><br><br>
                <input type="text" id="name" name="bookname"><br><br></div>
                <textarea id="area" name="textarea" rows="10" cols="150" required placeholder="write your review here......."></textarea><br>
                <div class="sub"> <button type="submit" id="sub">Update Reviews</button></div>
            </form>
        </div>
        <div>
<div class="review">
     <?php
            include "db.php";
//     $sql=mysqli_query($conn,"SELECT `email` from `reviews` where `category`='book'");
//     $sqll=mysqli_query($conn,"SELECT `bookname` from `reviews` where  `category`='book'");
//     $sqql=mysqli_query($conn,"SELECT `reviews` from `reviews` where  `category`='book'");
//     $roww=mysqli_num_rows($sqql);
//     if($roww>0){  
//       for($j =0 ; $j <= $roww; $j++){
//         $daata=implode(mysqli_fetch_assoc($sqll));
//         $dataa=implode(mysqli_fetch_assoc($sql));
//         echo $dataa ."<br>";
//         echo "Review"."\t"."on"."\t".$daata;
//         echo "<br>";
//         $data = implode(mysqli_fetch_assoc($sqql));
//         echo $data."\t"."<br><br><br>";
//     }       
// }
?>
        </div>

        <div>
            <!-- <button type="submit">DELETE</button> -->
            <!-- <button type="submit"><a href="update.php">EDIT</a></button> -->
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