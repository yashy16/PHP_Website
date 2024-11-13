<?php
session_start();
if(isset($_SESSION["user_name"]))
{
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<center><h1> Our Food Items</h1></center>
<br>
<center><b><u><h2> Special Chaats Items</h2></u></b></center>

<div class="container mt-5">
     <div class="row">
        <div class="col-sm-3">
            <img src="images/P1.jpg" width="270px" height="230px">
        </div>
        <div class="col-sm-3">
            <img src="images/P2.jpg" width="270" height="230px">
        </div>
        <div class="col-sm-3">
            <img src="images/P3.jpg" width="270px" height="230px">
        </div>
        <div class="col-sm-3">
            <img src="images/P4.jpg" width="270px" height="230px">
        </div>
        <div class="col-sm-3">
            <img src="images/P5.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P6.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P7.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P8.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P9.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P10.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P11.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P12.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P13.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P14.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/P15.jpg" width="270px" height="240px">
        </div>
        <div class="col-sm-3">
            <img src="images/Pbg.jpg" width="250px" height="250px">
        </div>
     </div>   
</div> 
</body>
</html>

<?php
}
else
{
    header("Location: login.php");
}
?>