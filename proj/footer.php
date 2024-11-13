<?php 



if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
include 'navbar.php';
 ?>
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   height: 16%;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>

<div class="footer">
<h2>This Chaat Bhandar website , it is Demo Project </h2>
<h3>Contact : 7045705548</h3>
<h4>
   <a class="" href="home.php">Home</a>
  <a href="aboutUs.php">AboutUs</a>
  <a href="menu.php">Menu</a>
  <a href="contactus.php">Contact Us</a>
  <a href="g.php">Gallery</a>
  <a href="mycart.php">My Cart</a>
  <a href="feedback.php">FeedBack Form</a>

</h4>
</div>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>