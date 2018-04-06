
<html>
<body>
<form method="post" action="edit.php">
<input type="submit" value="edit profile" name="sub">
<input type="submit" value="logout" name="subm">
</form>
</body>
</html>
<?php 
session_start();
echo "hai arun";
echo "<h1> WELCOME  ".$_SESSION['userlogin']['data']."</h1>";
echo $_SESSION['userlogin']['calssno'];
?>
<?php 
if(isset($_POST['sub']))
{
	header("location:aru.php");
}
?>
<?php
if(isset($_POST['subm']))
{
	unset($_SESSION['userlogin']);
	header("location:login.php");
}
?>
