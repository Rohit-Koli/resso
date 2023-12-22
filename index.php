<?php
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
?>
<!DOCTYPE html>
<html>
<head>
	<title>RessoMusic</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
  <section id="main-content">
    <div class="main">
      <p id="logo"><i class="fa fa-music"></i>Music</p>
      
          <!-- show_song_number -->
          <div class="show_song_no">
            <p id="present">1</p>
            <p>/</p>
            <p id="total">5</p>
          </div>
  
  
      <!--- left part --->
       <div class="left">
  
        <!--- song img --->
        <img id="track_image">
           <div class="volume">
              <p id="volume_show">90</p>
              <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
              <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">  
           </div>
  
       </div>
   
       <!--- right part --->
       <div class="right">
         <!--- song title & artist name --->
         <div class="song_detail">
             <p id="title">title.mp3</p>
             <p id="artist">Artist name</p>
         </div>
  
        <!--- middle part --->
         <div class="middle">
             <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
             <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
             <button onclick="next_song()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
         </div>
  
         <!--- song duration part --->
          <div class="duration">
             <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
             <button id="auto" onclick="autoplay_switch()">Auto &nbsp;<i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
          </div>
             
      </div>
  
  
    </div>
  </section>
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
   
  <!--- Add javascript file --->
  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>