<!-- <?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("location:login.php");
    exit();
}
?>
<?php
if (isset($_SESSION['u_data'])) {
    $user = $_SESSION['u_data'];
}
?>
<?php
if (isset($_SESSION['id'])) {
    $id=$_SESSION['id'];
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="profile.php">Profile</a>
      </div>
    </div>
  </div>
</nav>
    <div class="user-container">
        <center>
            <?php
            // include'_dbconnect.php';
            $servername="localhost";//Server Name
            $username="root";//User Name
            $password="";//Password
            $database="ressodb";//Database Name
            $conn=mysqli_connect($servername,$username,$password,$database);
            if (!$conn) {
                // die("Fail TO Connect with Database ! Due to this Error".mysqli_connect_error());
                die("Fail TO Connect with Database ! Due to this Error");
            }
                $sql="SELECT * FROM `user` WHERE mail='$id'";
                $query=mysqli_query($conn,$sql);
                while ($rows=mysqli_fetch_assoc($query)) {
                    echo'<h2>
                    Welcome -'.$rows['uname'].'
                </h2><br>          
            
            <div class="userinfo">
                 <p class="user-details">Your Name is :-'.$rows['uname'].'</p>
                <p class="user-details">Email ID :-'.$rows['mail'].'</p>
                <p class="user-details">Password is :-'.$rows['password'].'</p>
                ';
                }
                ?>             
                


                </p>
               

            </div>
            <a href="logout.php" class="Logout-btn">
                <button class="f-btn">LogOut</button>
            </a>
            <a href="update_user.php" class="Logout-btn">
                <button class="f-btn">Update</button>
            </a>

        </center>
    </div>

    <footer class="footer">
    <div class="container flex">
      <p class="tertiary">
        &copy; 2023 Programmer<a href="#" class="dev-name" style="text-decoration: none;color: #fff;"> Resso</a> . All Rights Reserved.
      </p>
    </div>
      <div class="social" style="margin:23px;">
        <a href="https://www.linkedin.com/in/koli-rohit/" class="icons"><img src="images/linkedin.png" alt="LinkedIn Logo" height="32px" width="33px"></a>
        <a href="https://github.com/Rohit-Koli" class="icons"><img src="images/github.png" alt="GitHub Logo" height="32px" width="33px"></a>
        <a href="https://www.facebook.com/profile.php?id=100027148483114" class="icons"><img src="images/facebook.png" alt="facebook Logo" height="32px" width="33px"></a>
        <a href="https://www.instagram.com/rohit_koli045/" class="icons"><img src="images/instagram.png" alt="facebook Logo" height="32px" width="33px"></a>
      </div>
</footer> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>