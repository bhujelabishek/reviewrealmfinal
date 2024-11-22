<?php
session_start();
$userprofile = $_SESSION['username'];
if ($userprofile == true) {
} else {
    header("location:loginpagereal.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Realm</title>
    <link rel="icon" type="image" href="realm.png">
    <link rel="stylesheet" href="css/admin.css">
</head>
<style>
    * {
    margin: 0;
    padding: 0;
}

body::-webkit-scrollbar {
    width: 0.1em;
}

html {
    /* background-image: url(homeback.jpg); */
    background-position: center;
    background-size: cover;
}

body {
    /* background-image: radial-gradient(circle, #ffffff, #ffffff, #ffffff, #ffffff, #ffffff, #f2f1f3, #e5e2e7, #dad4db, #c2b4be, #ac959e, #97767c, #805a5a); */
    background-color: gray;
    font-family: Arial, sans-serif;
    /* height: 100vh; */


}

nav {
    background-color: #000000;
    display: flex;
    justify-content: space-between;
    /* align-items: center; */
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    margin-left: auto;
    margin-right: 0%;


}

.dropdown {
    position: relative;

}

.dropdown button {
    background-color: #ffffff;
    color: #ffffff;
    padding: 20px;
    border: none;
    cursor: pointer;
    font-size: 15px;


}

.dropdown button:hover {
    background-color: #b2b2b2;
    ;
}

.dropdown button a {
    text-decoration: none;
    color: black;
}

.dropdown-data {
    display: none;
    color: rgb(255, 255, 255);
    position: absolute;
    background-color: #ffffff;
    min-width: 100px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 0;
}

.dropdown:hover .dropdown-data {
    display: block;
    background-color: white;
    color: black;
}

.dropdown-data a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    background-color: white;
}

.dropdown-data a:hover {
    background-color: rgb(220, 220, 220);
    text-decoration: underline;
    color: black;
}

.navbar {
    position: sticky;
    top: 0;
    padding: 15px;
    background-color: #06131e;
    font-size: 100%;
    color: rgb(255, 255, 255);
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-right: 2px;
}

.navbar h1 {
    margin: 0%;
    margin-left: -76%;
    color: goldenrod;
}

.navbar img {
    height: 40px;
    width: 40px;
    margin-right: 0px;
}

.navbar1 {
    padding: 5px;
    margin-top: -0.3%;
    margin-right: 0%;
    margin-left: 18%;
}

.head1 {
    padding: 20px 0px 20px 10px;
    font-size: 100%;
    margin-left: 0%;
    font-style: italic;
    font-size: 200%;
    background-color: transparent;
}

.welcome {
    padding: 20px 0px 20px 10px;
    font-size: 230%;
    font-family: serif;
    color: #259e0d;
}

.paragraph {
    padding: 0px 0px 0px 15px;
    text-align: justify;
    font-family: cursive;
    margin: 0% 35% 0% 2%;
    color: #ffffff;
    font-size: larger;
    padding: 10px;
    background-color: #259e0d;
    border-top-left-radius: 20px;
    border-top-right-radius: 20px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;

}

.boxes {
    padding: 0px 2px 0px 10px;
    margin: 2% 85% -2% 2%;
    background-color: white;
    color: rgba(0, 0, 0, 0.82);
    border-radius: 20px;
    /* text-align: center; */
    font-size: 30px;

}


.par {
    color: rgb(255, 255, 255);
    /* border-bottom-left-radius: 0%;
    border-bottom-right-radius: 10%; */
    /* padding-bottom: 0px; */
    background-image: radial-gradient(circle, #159300, #0f7a0a, #0c620e, #0b4b0e, #0a350c, #0a2b09, #0a2205, #041900, #041900, #031800, #031800, #031700);
    padding: 10px;
    padding-bottom: 0px;
    margin: 0px;
    padding-top: 50px;
    padding-bottom: 50px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}

.circular-container {
    height: 330px;
    width: 230px;
    border-radius: 10%;
    overflow: hidden;
    float: right;
    margin-top: 0%;
    margin-right: 1%;
    background-color: transparent;
}

.circular-container img {
    width: 260px;
    height: 350px;
    display: block;
}

.anotherimage {
    height: 150px;
    width: 150px;
    border-radius: 10%;
    overflow: hidden;
    float: right;
    margin-top: 0%;
    margin-right: 1%;
    background-color: black;

}

.anotherimage img {
    height: 150px;
    width: 160px;

}

.anotherimage1 {
    height: 150px;
    width: 150px;
    border-radius: 10%;
    overflow: hidden;
    float: right;
    margin-top: 5%;
    margin-right: -5%;
    background-color: black;
}

.anotherimage1 img {
    height: 167px;
    width: 150px;

}

.anotherimage2 {
    height: 150px;
    width: 150px;
    border-radius: 10%;
    overflow: hidden;
    float: right;
    margin-top: 12%;
    margin-right: -10.2%;
    background-color: black;
}

.anotherimage2 img {
    height: 160px;
    width: 150px;

}

.boxrow1 {
    display: flex;
    margin-left: 4%;
    flex-direction: row;
    justify-content: space-around;
}

.boxbook a,
.boxres a,
.boxmovie a,
.boxapp a {

    padding: 20px 100px;

    background-color: #ffffff;
    color: rgba(0, 0, 0, 0.872);
    border: 0.1px solid rgba(118, 118, 118, 0.466);
    border-radius: 3px;
    font-size: 17px;
    font-weight: 400;
    text-align: left;
    text-decoration: none;
    box-shadow: 1px 1px 1px 1px rgb(156, 156, 156);

}

.boxbook a:hover,
.boxres a:hover,
.boxmovie a:hover,
.boxapp a:hover {
    box-shadow: 2px 2px 2px 2px rgb(156, 156, 156);
    background-color: #e4e4e4;

}

.boxbook a:active,
.boxres a:active,
.boxmovie a:active,
.boxapp a:active {
    box-shadow: none;
}

/* .boxres a {
    padding: 20px 70px;
    padding-left: 30px;
    background-color:  #cbcccd;
    color:  rgba(0, 0, 0, 0.872);
    border: 0.1px solid rgb(181, 180, 180);
    border-radius: 5px;
    font-size: 17px;
    font-weight: 400;
    text-align: left;
    text-decoration: none;
    box-shadow: 3px 3px 3px 3px rgb(156, 156, 156);
} */

.boxrow2 {
    display: flex;
    margin-left: 4%;
    flex-direction: row;
    justify-content: space-around;
}

.boxclothing a,
.boxtravel a,
.boxplace a,
.boxpet a {
    padding: 20px 100px;

    background-color: #ffffff;
    color: rgba(0, 0, 0, 0.872);
    border: 0.1px solid rgb(181, 180, 180);
    border-radius: 5px;
    font-size: 17px;
    font-weight: 400;
    text-align: left;
    text-decoration: none;
    box-shadow: 1px 1px 1px 1px rgb(156, 156, 156);
}
.boxclothing a:hover,
.boxtravel a:hover,
.boxplace a:hover,
.boxpet a:hover {
    box-shadow: 2px 2px 2px 2px rgb(156, 156, 156);
    background-color: #e4e4e4;
}
.footer {
    padding: 70px;
    padding-top: 20px;
    margin-top: 187px;
    margin-bottom: 0px;
    background-color: rgba(0, 0, 0, 0.244);
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    color: white;
    font-family: 'Times New Roman', Times, serif;
    font-size: small;
}

.box3 {
    align-self: center;
    font-size: larger;
}

.box1 a,
.box2 a {
    text-decoration: none;
    color: white;
    font-size: larger;
}

.box1 a:hover,
.box2 a:hover {
    text-decoration: underline;
}

.profile a {
    text-decoration: none;
    color: white;
    font-size: 20px;
}

.profile a:hover {
    text-decoration: underline;
    font-size: 19px;
}
.maindiv{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 80px;
    padding-top: 50px;
    padding-bottom: 10px;
}
.deleteuser{
    float: right;
    /* padding: 8px; */
    font-size: large;
    background-color:white;
    color:black;
    border-radius: 10px;
    border: none;
    width: 100%;
}
.deletereview{
    float: right;
    padding: 8px;
    font-size: large;
    background-color:white;
    color:black;
    border-radius: 10px;
    border: none;
}
.deleteuser:hover{
    background-color:black;
    color: white;
    cursor: pointer;
    box-shadow: 5px 4px 5xp 5px white;
}
.deletereview:hover{
    background-color:black;
    color: white;
    cursor: pointer;
}
.newtable{
   text-align: justify;
   width: 100%;
    background-color: rgba(0, 0, 0, 0.781);
    color: white;
    font-size: medium;
}
.newtable th{
    color: green;
    font-size: larger;
    text-align: center;
    padding: 5px;
}
.newtable td{
    padding: 5px 15px;
}
.newtable1{
    background-color: rgba(0, 0, 0, 0.781);
}
.newtable1 th{
    text-align: left;
    color: green;
    font-size: larger;
    padding: 5px;
}
.newtable1 td{
    padding: 5px 15px;
}
</style>
<body>
    <nav>
        <div>
            <h1 style="color: white; margin: 10% 0% 0% 8%;">ReviewRealm</h1>
        </div>
        <ul>

            <li class="dropdown">
                <button><a href="admin.php">Home</a></button>
            </li>


            <li class="dropdown">
                <button><a>Explore</a></button>
                <div class="dropdown-data">
                    <a href="bookadmin.php">Books</a>
                    <a href="resadmin.php">Restaurants</a>
                    <a href="movieadmin.php">Movies</a>
                    <a href="appadmin.php">Apps</a>
                    <a href="petadmin.php">Pets</a>
                    <a href="clothingadmin.php">Clothing</a>
                    <a href="traveladmin.php">Travels</a>
                    <a href="placeadmin.php">Place</a>
                </div>
            </li>
            <li class="dropdown">
                <button><a href="adminprofile.php">Admin Profile</a></button>
            </li>
            <!-- <li class="dropdown">
            <button><a href="register.html">Register</a></button>
            </div> -->
            </li>
            </li>
        </ul>
    </nav>
    <div class="maindiv">
        <div class="div1">
        <h2  style="text-align: center;" ><mark style="background-color: darkgreen; color: white;">User Details</mark></h2><br>
        <table border="2" cellspacing= "7" class="newtable1" style="background-color: rgba(0, 0, 0, 0.781);">
                <tr>
                    <th width:"30%";>SN</th>
                    <th  width:"40%";>Username</th>
                    <th width:"25%";>Email</th>
                    <th widht:"5%">Operations</th>
                </tr>
            <?php
            include("db.php");
            $sql= mysqli_query($conn, "SELECT *FROM `reviewdata`");
            $data= mysqli_num_rows($sql);
            if($data !=0){
                ?>
                <?php
                while($result= mysqli_fetch_assoc($sql)){
                        echo "<tr>
                            <td> $result[id]</td>
                              <td>$result[username]</td>
                                <td>$result[email]</td>
                                <td><a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='deleteuser.php ? iddeleteuser= $result[id]'`><button type='submit' value='submit' class='return deleteuser' onclick='deleteUser'>Delete User</button></a></td>
                               </tr>";
                }
            }
            ?>
            </table><br><br>        
        </div><br><br><br>
                <!-- CODE FOR USER REVIEW -->
                        <h2  style="text-align: center;"><mark style="background-color: darkgreen; color: white;">User Review Details</mark></h2><br>
                <?php
                    include("db.php");
                    $query=mysqli_query ($conn,"SELECT *FROM `reviews`");

                    $total = mysqli_num_rows($query);


                    if($total!=0){

                    }
                ?>
                <table border="2" cellspacing= "7" width="100%" class="newtable">
                    <tr>
                        <th width="3%">SN</th>
                        <th  width="3%">Email</th>
                        <th  width="3%">Category</th>
                        <th  width="13%">Reviews Topics</th>
                        <th  width="40%">Reviews</th>
                        <th  width="10%">Reviewed On</th>
                        <th  width="12%"> Operations</th>
                    </tr>
                    <?php
                    while($result= mysqli_fetch_assoc($query)){
                            echo "<tr>
                                    <td>$result[id]</td>
                                    <td>$result[email]</td>
                                    <td>$result[category]</td>
                                    <td>$result[bookname]</td>
                                    <td>$result[reviews]</td>
                                    <td>$result[review_on]</td>
                                    <td> <a onClick=\"javascript: return confirm('Are you sure you want to delete?');\" href='deletereview.php ? 
                                    id= $result[id]'><button type='submit' class='deletereview'>Delete Review</button></a> </td>
                                </tr>";
                    }
                ?>
                </table><br>
                </div>
            </div>
            <footer class="footer">
                <div class="box1">
                    <a href="contactadmin.html">Contact us</a><br>
                </div>
                <div class="box2"><a href="aboutusadmin.html">About us</a></div>
                <div class="box3">
                    <p style="text-align: justify;">Share your thoughts on our website to enhance your experience. <br>Join us on social media and be part of our
                        journey to excellence. <br>Thanks for your contribution!</p>
                </div>

            </footer>
</body>

</html>