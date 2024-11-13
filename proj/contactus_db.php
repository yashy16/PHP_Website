<?php
	$name = $_POST['name'];
	$mob = $_POST['mob'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];

	//echo $name."--".$mob."--".$email."--".$msg;
?>

<?php
	include('db_conn.php');
	$sql = "insert into contact (name, Email, Mobno, Message) values('".$name."','".$email."',".$mob.", '".$msg."');";
	if($conn->query($sql))
	{
		echo "inserted";
	}
	else
	{
		echo "failed";
	}
?>