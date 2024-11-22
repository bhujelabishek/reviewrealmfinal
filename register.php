<?php
session_start();
// $profile=$_POST['profile'];
$usernam=$_POST['usernam'];
$em=$_POST['emaill'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

// echo" $usernam, $em, $hash"."<br>";
// echo $hash1;

include"db.php";
$filename= $_FILES["profile"]["name"];
$temp_name= $_FILES["profile"]['tmp_name'];
$folder= 'images/'.$filename;
// echo $folder;
move_uploaded_file($temp_name, $folder);
$pattern = '/^[a-zA-Z0-9._%+-]+@gmail\.com$/';
if(preg_match($pattern, $em)){
    include "db.php";
   header("location: loginpagereal.html");
}
else{
    $_SESSION['erro'] = "*Invalid Email*";
   header("location: registerone.php");
}
$min_length = 8;
if(strlen($pass) > $min_length){
    include "db.php";
//    $sql=mysqli_query($conn,"INSERT INTO `reviewdata`(`username`,`email`,`password`,`cpassword`)
//    VALUES('$usernam','$em','$pass','$cpass')");
    header("location: loginpagereal.html");
}
else{
   $_SESSION['erorred']= "*Password must be length of 8!*";
    header("location: registerone.php");
}
if($pass==$cpass){
    include "db.php";
        $sql=mysqli_query($conn,"INSERT INTO `reviewdata`(`username`,`email`,`password`)
         VALUES('$usernam','$em','$pass')");
        //  echo $hash;
        header("location:loginpagereal.html");
    }
    else{
        // $_SESSION['erro'] = "*Invalid Email*";
        $_SESSION['err']= "*Both Password must be same!*";
      header("location: registerone.php");
    }

?>

