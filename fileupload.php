<?php
if(isset($_POST['s1']))
{
$a=$_FILES['f1']['type'];
if($a=='image/jpeg')
{
 move_uploaded_file($_FILES['f1']['tmp_name'],"upload/".$_FILES[ 'f1']['name']);
 echo $_FILES['f1']['name']." "." uploaded successfully"."<br>";
 echo "FILE DETAILS"."<br>";
 echo "FILE NAME=".$_FILES['f1']['name']."<br>";
 echo "FILE TYPE=".$_FILES['f1']['type']."<br>";
 echo "FILE SIZE=".$_FILES['f1']['size']."<br>";
}
else
{
  echo "error";
}
} 
?>
<html>
<head>
</head>
<body>
<form method="post" action="fileupload.php" enctype="multipart/form-data">
<input type="file" name="f1"><br>
<input type="submit" name="s1" value="upload">
</form>
</body>
</html>

