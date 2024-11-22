<?php
include "db.php";
$id =$_GET['iddeleteuser'];
$sql=mysqli_query($conn,"DELETE FROM `reviewdata` WHERE `id`='$id'");
header("location:admin.php");
// if($sql){
//     echo "record deleted";
// }
// else{
//     echo "record not deleted.";
// }
?>