<?php
session_start();
if(isset($_SESSION["user_name"]))
{
?>

<?php
}
else
{
	header("Location: login.php");
}
?>