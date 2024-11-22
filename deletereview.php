<?php
include "db.php";
$id=$_GET['id'];
// $review=$_GET['category'];
$sql=mysqli_query($conn,"DELETE FROM `reviews` WHERE `id`='$id'");
header("location:admin.php");
// if($sql){
//     echo "deleted";
// }
// else{
//     echo"not deleted";
// }
// echo $username;
// echo $review;
?>