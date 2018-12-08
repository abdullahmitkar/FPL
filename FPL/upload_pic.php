<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
<meta http-equiv='refresh' content='2;url=home.php' />
<style>
.required{
color: #FF0000;
}
</style>
<?php
if(!isset($_POST['submit']))
{
?>
<form enctype="multipart/form-data" action="upload_pic.php" method="POST"> 
<input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /> 
Username:&nbsp
<input type="text" name="username"><span class="required">*</span><br>
<br>
Team Name:&nbsp
<input type="text" name="team_name"><span class="required">*</span><br>
<br>
Please upload a profile picture
<br>
<input name="uploadedfile" type="file" /><br /><br> 
<input name="submit" type="submit" value="Upload File" />
</form>

<?php
}

else
{

 mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("fpl");
if ((($_FILES["uploadedfile"]["type"] == "image/gif")
  || ($_FILES["uploadedfile"]["type"] == "image/jpeg")
  || ($_FILES["uploadedfile"]["type"] == "image/jpg")
  || ($_FILES["uploadedfile"]["type"] == "image/png")
  || ($_FILES["uploadedfile"]["type"] == "image/bmp")
  || ($_FILES["uploadedfile"]["type"] == "image/pjpeg")))
{
 $target_path = "uploads/"; 
 $target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
 if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) 
 { 

 $row="SELECT MAX(team_id) as maxi FROM admin";
 $r=mysql_query($row);
 $m=mysql_fetch_array($r);
 $max=$m['maxi'];
 $max++;
 $query="INSERT INTO admin (Name,username,password,team_name,team_id,pic) VALUES ('".$_SESSION["name"]."','".$_POST['username']."','".$_SESSION["password"]."','".$_POST['team_name']."',".$max.",'".$target_path."') ";
 mysql_query($query);
// echo "insert successfull";
 } 
}
else
{
 echo "Invalid file";
}

$q="SELECT pic FROM admin WHERE team_id='".$max."'";
$r=mysql_query($q);
$row=mysql_fetch_array($r);
echo $row['pic'];
$m=$row['pic'];
?>
<br>
<img src=<?php echo $m; ?> alt="asd">

<?php
}
?>
</body>
</html>