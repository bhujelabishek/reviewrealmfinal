<?php
include "db.php";
session_start();
$user=$_SESSION['username'];
$book=$_POST['bookname'];
$newreview=$_POST['textarea'];
// echo $user.$book.$newreview;
 $sql=mysqli_query($conn ,"UPDATE `reviews` set `reviews`='$newreview' WHERE `email`='$user' AND `bookname`='$book'");
header("location:home1.php");
?>