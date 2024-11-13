<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
body{
	font-family: 'Open Sans',sans-serif;
	background-color: gray;

}
*{
	margin: 0.97px;
	padding: 0;
	box-sizing: border-box;
}
h1{
	text-align: center;
	padding: 15px 0;
	color: blue;

}
h1:hover{
	color: red;
}
.contact{
	width: 400px;
	max-width: 90%;
	margin-top: 20px;
	margin: 0 auto;

}
.contact-input{
	margin-bottom: 10px;
}
.contact-input > label{
	display: block;
	margin-bottom: 5px;
}
.contact-input > label:hover{
	color:  red;
}
.contact-input > input, .contact-input > textarea{
	width: 100%;
	height: 30px;
	border-radius:2px ;
	border: 1px solid black;
	outline: none;
	padding-left: 5px;

}
.contact-input > textarea{
	height: 130px;
	padding: 5px;
}
.contact-button{
	padding: 10px 25px;
	font-size: 20px;
	border: none;
	outline: none;
	background-color: blue;
	color: whitesmoke;
	cursor: pointer;
	border-radius: 10px;

}
.contact-button:hover{
	background-color: red;
}
	</style>
</head>
<body>
	<?php 
     include 'navbar2.php';
     ?>
     <h1>Contact Us</h1>
<div class="contact">
	<form method="post" action="test.php">
		<div class="contact-input">
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div class="contact-input">
			<label>Mobile No</label>
			<input type="number" name="mob">
		</div>
		<div class="contact-input">
			<label>Email</label>
			<input type="email" name="email">
		</div>
		<div class="contact-input">
			<label>Message</label>
			<textarea name="msg"></textarea>
		</div>
		<input type="submit" class="contact-button" value="Send"> 
	</form>
</div>

</body>
</html>

