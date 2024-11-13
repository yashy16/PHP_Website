<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
include 'navbar.php';
 ?>


<!DOCTYPE html>
<html>
<head >
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Mycart</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script type="text/javascript">
     </script>
</head >
<body style="background-color: lightgray;">
     <div class="container mt-5">
          <div class="row">
               <div class="col-lg-3">
                    <div class="card" style="background-color: gray;">
                         <img src="images/P8.jpg" class="card-img-top" alt="..." height="250px">
                         <div class="card-body text-center">
                             <h5 class="card-title">Dahi Puri</h5>
                             <p class="card-text">Price: RS.50</p>
                             <p class="card-text">Select Quantity</p>
                             <form action="manage_cart.php" method="get">
                              <select name="quantity" class="form-control">
                                   <option value="1" selected>1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                              </select>
                              <input type="hidden" name="name" value="Dahi Puri">
                              <input type="hidden" name="price" value="50">
                             <button type="submit" class="btn btn-info"+>Add To Cart</button>
                        </form>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3">
                    <div class="card" style="background-color: gray;">
                         <img src="images/P9.jpg" class="card-img-top" alt="..." height="250px">
                         <div class="card-body text-center">
                             <h5 class="card-title">Bhel</h5>
                             <p class="card-text">Price: RS.30</p>
                             <p class="card-text">Select Quantity</p>
                             <form action="manage_cart.php" method="get">
                              <select name="quantity" class="form-control">
                                   <option value="1" selected>1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                              </select>
                              <input type="hidden" name="name" value="Bhel">
                              <input type="hidden" name="price" value="30">
                             <button type="submit" class="btn btn-info"+>Add To Cart</button>
                        </form>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3">
                    <div class="card" style="background-color: gray;">
                         <img src="images/P3.jpg" class="card-img-top" alt="..." height="250px">
                         <div class="card-body text-center">
                             <h5 class="card-title">Pani Puri</h5>
                             <p class="card-text">Price: RS.25</p>
                             <p class="card-text">Select Quantity</p>
                             <form action="manage_cart.php" method="get">
                              <select name="quantity" class="form-control">
                                   <option value="1" selected>1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                              </select>
                              <input type="hidden" name="name" value="Pani Puri">
                              <input type="hidden" name="price" value="25">
                             <button type="submit" class="btn btn-info"+>Add To Cart</button>
                        </form>
                         </div>
                    </div>
               </div>
               <div class="col-lg-3">
                    <div class="card" style="background-color: gray;">
                         <img src="images/P6.jpg" class="card-img-top" alt="..." height="250px">
                         <div class="card-body text-center">
                             <h5 class="card-title">Dahi Bhale</h5>
                             <p class="card-text">Price: RS.60</p>
                             <p class="card-text">Select Quantity</p>
                             <form action="manage_cart.php" method="get">
                              <select name="quantity" class="form-control">
                                   <option value="1" selected>1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                              </select>
                              <input type="hidden" name="name" value="Dahi Bhale">
                              <input type="hidden" name="price" value="60">
                             <button type="submit" class="btn btn-info"+>Add To Cart</button>
                        </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>