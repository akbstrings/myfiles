<!DOCTYPE HTML>
<?php

$gender="";
$name="";
$age="";
$place="";
$address="";
$number="";
$emailid="";
$course="";
$pwd="";
$cpwd="";
if(isset($_POST['submit_btn']))
{
	
$name=$_POST['name'];


$age=$_REQUEST['age'];


$place=$_REQUEST['place'];


if(isset($_POST['gender']))
	{
		$gender=$_POST['gender'];
	}
	


$address=$_REQUEST['address'];


$contactno=$_REQUEST['number'];



$emailid=$_REQUEST['emailid'];



$qualification=$_REQUEST['course'];


$password=$_REQUEST['pwd'];



$confirmpassword=$_REQUEST['cpwd'];


echo $name."<br>".$age."<br>".$place."<br>".$gender."<br>".$address."<br>".$contactno."<br>".$emailid."<br>".$qualification."<br>".$password."<br>".$confirmpassword;

$conn=mysqli_connect("localhost","root","","soorya");
$sql="insert into arun values('$name',$age,'$place','$gender','$address',$contactno,'$emailid','$qualification','$password','$confirmpassword')";
echo $sql;
$result=mysqli_query($conn,$sql);
if($result)
{
echo " value inserted";
}
else
{
echo "error";
}



}
?>

<html>
<head>
<title>registration form</title>
</head>
<style>
.asd
{
height:500px;
width:500px;
background-color:pink;
}
</style>
<body>
<div class="asd" >
<form name="register" method="post" action="register.php">
<h1>REGISTRATION FORM</h1>
<table>
<tr>
<td><label>Name</label></td>
<td><input type="text" name="name"><span style="color:blue;"></td>
</tr>
<tr>
<td><label>age</label></td>
<td><input type="text" name="age"><span style="color:blue;"></td>
</tr>
<tr>
<td><label>place</label></td>
<td><input type="text" name="place"><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Gender</label></td>
<td style="margin-left:20px;float:left">
Male<input type="radio" name="gender" id="r1" value="male"/>
Female<input type="radio" name="gender" id="r2" value="female"/><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Address</label></td>
<td><textarea style="width:165px" name="address"></textarea><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Contact Number</label></td>
<td><input type="text" value="+91" style="width:30px;" disabled /><input type="text" onkeyup="myfun(this.value)" name="number" id="p" style="margin-left:0px; width:134px;"/><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Email id</label></td>
<td><input type="email" placeholder="abc@gmail.com"  name="emailid"/><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Qualification</label></td>
<td style="margin-left:20px;float:left">
<select name="course">
<option value=""> SELECT </option>
<option value="SSLC">SSLC</option>
<option value="PLUS TWO">PLUS TWO</option>
<option value="DEGREE">DEGREE</option>
<option value="PG">PG</option>
</select>
<span style="color:blue;">
</td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="pwd"/><span style="color:blue;"></td>
</tr>
<tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="cpwd" /><span style="color:blue;"></td>
</tr>
</table>
<input type="submit" onclick="" id="btnsub" name="submit_btn"/>


</form>
</div>
</body>
</html>





