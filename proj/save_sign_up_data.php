<?php
	$name = $_POST['name'];
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];

	//echo $name."--".$mob."--".$email."--".$msg;
?>

<?php
	include('db_conn.php');
	$sql = "insert into users (user_name, name, password) values('".$uname."','".$name."', '".$pass."');";
	if($conn->query($sql))
	{
		header("location:index.php");
	}
	else
	{
		echo "failed";
	}
	
?>