<!DOCTYPE HTML>
<html>

<body>
<form method="post" action="login.php">
User name :<input type="text" name="username"><br>
Password :<input type="text" name="password"><br>
<input type="submit" value="submit" name="sub">
</form>
<?php
if(isset($_POST['sub']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$conn=mysqli_connect("localhost","root","root","soorya");
$sql="select * from sajesh where username='$user'and password='$pass'";
$log=mysqli_query($conn,$sql);
$count=mysqli_num_rows($log);
$obj=mysqli_fetch_array($log);

	if($count==1)
	{
		session_start();
		
		$_SESSION['userlogin']=$obj;
	
	header("location:edit.php");
	}
	else
	{
		echo "login error";
	}
}
?>
</body>
</html>
