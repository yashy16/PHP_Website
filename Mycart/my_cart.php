<?php include("header.php"); 
	session_start();
?>

<!DOCTYPE html>
<html>
<head >
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mycart</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script type="text/javascript">
		function testfun()
		{
			alert("Added to cart");
		}
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
					    <a href="manage_cart.php?name=Dahi Puri&price=50&quantity=1" class="btn btn-info" onclick="testfun()">Add To Cart</a>
				  	</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card" style="background-color: gray;">
  					<img src="images/P9.jpg" class="card-img-top" alt="..." height="250px">
  					<div class="card-body text-center">
					    <h5 class="card-title">Bhel</h5>
					    <p class="card-text">Price: RS.30</p>
					    <a href="manage_cart.php?name=Bhel &price=30&quantity=1" class="btn btn-info">Add To Cart</a>
				  	</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card" style="background-color: gray;">
  					<img src="images/P3.jpg" class="card-img-top" alt="..." height="250px">
  					<div class="card-body text-center">
					    <h5 class="card-title">Pani Puri</h5>
					    <p class="card-text">Price: RS.25</p>
					    <a href="manage_cart.php?name=Pani Puri&price=25&quantity=1" class="btn btn-info">Add To Cart</a>
				  	</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="card" style="background-color: gray;">
  					<img src="images/P6.jpg" class="card-img-top" alt="..." height="250px">
  					<div class="card-body text-center">
					    <h5 class="card-title">Dahi Bhale</h5>
					    <p class="card-text">Price: RS.60</p>
					    <a href="manage_cart.php?name=Dahi Bhale&price=60&quantity=1" class="btn btn-info">Add To Cart</a>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>