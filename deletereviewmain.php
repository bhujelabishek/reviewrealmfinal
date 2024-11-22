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
    <link rel="stylesheet" href="css/deletereviewmain.css">
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
            <h1>DELETE USER</h1>
        </div>
        <div class="books">
            <form action="deletereview.php" method="post" class="forms">
               
                <br><br><div class="newme"><label for="textarea">Email:</h1></label><br><br>
                <input type="text" id="name" name="email"><br><br></div>
                <br><br><div class="newme"><label for="textarea">Review of:</h1></label><br><br>
                <input type="text" id="name" name="review"><br><br></div>
                <!-- <textarea id="area" name="textarea" rows="10" cols="150" required placeholder="write your review here......."></textarea><br> -->
                <div class="sub"> <button type="submit" id="sub">Delete Review</button></div>
            </form>
        </div>
   
        <div>
            <?php
//             include "db.php";
//     $fett=mysqli_query($conn,"SELECT `username` from `reviewdata` where `email`='$userprofile'");
//     $feet=mysqli_query($conn,"SELECT `bookname` from `reviews` where `email`='$userprofile'");
//     $fet=mysqli_query($conn,"SELECT `reviews` from `reviews` where `email`='$userprofile'");
//     $row=mysqli_num_rows($fet);
//     if($row>0){
//         $raata=implode(mysqli_fetch_assoc($feet));
//         $rataa=implode(mysqli_fetch_assoc($fett));
//         echo $rataa ."<br>";
//         echo "Review"."\t"."on"."\t".$raata;
//         echo "<br>";
//         for($i =0 ; $i <= $row; $i++){
//         $rata = implode(mysqli_fetch_assoc($fet));
//         echo $rata."\t";
//     }       
// }
?>

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
            <!-- <a href="deletebook.php"><button type="submit">DELETE</button></a> -->
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