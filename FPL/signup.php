<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<style>
.required{
color: #FF0000;
}
</style><!-- 5-->
<body>
<h1>Please provide following details</h1>
<p><span class="required">* required field.</span></p>
<br>
<?php
if(!isset($_POST['submit']))
{
?>
<form action="signup.php" method ="post">
Name:&nbsp
<input type="text" name="name"><span class="required">*</span><br>
<br>
Mobile NO:&nbsp
<input type="text" name="mobile_no"><span class="required">*</span><br>
<br>
Gender:&nbsp
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<span class="required">*</span><br>
<br>
Email:&nbsp
<input type="text" name="email"><span class="required">*</span><br>
<br>
Password:&nbsp
<input type="password" name="password"><span class="required">*</span><br>
<br>
Confirm Password:&nbsp
<input type="password" name="confirm_password"><span class="required">*</span><br>
<br>
<input type="submit" name="submit" value="Submit">

</form>
<?php
}
  else
  {
  $_SESSION["name"] =$_POST["name"];
  $_SESSION["password"] =$_POST["password"];
   mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("fpl");
	$n=0;
	 if (empty($_POST["name"])) 
	 {
	   echo "name is required";
	   echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
	   
     }
	 else 
	  {
	    $n++; 
      }	
	  if (empty($_POST["mobile_no"])) 
	 {
	   echo "mobile no is required";
	   echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
	   
     }
	else 
	  {
	    $n++; 
      }	
     if(empty($_POST["gender"]))
	 {
       echo "Gender not specified";
	   echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
	  
	 } 
	 else 
	  {
	    $n++; 
      }	 
     if(empty($_POST["email"]))
      {
        echo "Email not specified";
		echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
      }
	 else 
	  {
	    $n++; 
      }	
      if(empty($_POST["password"]))
      {
        echo "Password not specified";
		echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
      }
	else 
	  {
	     if(strlen($_POST["password"])>=8)
		 {
		   $n++;
		    if(empty($_POST["confirm_password"]))
             {
               echo "Please confirm your password";
			   echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
             } 	
	         else 
	         {
	            $n++; 
             }	  
         }
         else
         {
            echo "Password length too small";
			echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
         }		 
      }	
       
	  
	  
      if($n==6)
	  {  $m=0;
	   
		if(preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $_POST['email']))
		{
		  $m++;
		}
		else
		{
		  echo "Invalid email";
		  echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
		}
		 if(preg_match("/^[0-9]{10}/",$_POST['mobile_no']))
		 { 
		  $m++;
		}
		else
		{
		  echo "Invalid phone no";
		  echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
		}
		if($_POST['password']==$_POST['confirm_password'])
		{
		  $m++;
		}
		else
		{
		  
		  echo "Password's dont match";
		  echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
		}
		
		if($m==3)
		{
		 echo "<meta http-equiv='refresh' content='2;url=upload_pic.php' />";
		}
		
	  }
	  
  }
?>

</body>
</html>