<html>
<head>
<title>edit profile</title>
</head>
<body>
<?php
session_start();
?>
<form method="post" action="edit2.php">
ID:<input type="text" name="id" value="<?php echo $_SESSION['userlogin']['id'];?>" readonly>
data:<input type="text" name="data" value="<?php echo $_SESSION['userlogin']['data'];?>">
calssno:<input type="text" name="calssno" value="<?php echo $_SESSION['userlogin']['calssno'];?>">
gracemark:<input type="text" name="gracemark" value="<?php echo $_SESSION['userlogin']['gracemark'];?>">
<input type="submit" name="sub" value="	UPDATE">
</form>
</body>
</html>

<?php

if(isset($_POST['sub']))
{
	$id=$_POST['id'];
	$data=$_POST['data'];
	$calssno=$_POST['calssno'];
	$gracemark=$_POST['gracemark'];
	$sql="update sajesh set data='$data',calssno='$calssno',gracemark='$gracemark' where id=$id";
	
	mysqli_query($conn,$sql);
	header("location:aash.php");
	
	
	$_SESSION['userlogin']['data']=$data;
	$_SESSION['userlogin']['calssno']=$calssno;
	$_SESSION['userlogin']['gracemark']=$gracemark;
}
?>
