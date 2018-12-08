<!DOCTYPE html>
<html>
<head>
	<style>
	body{
background-color:black;
}
#imgs img{
width:100%;
height:100%;
position:absolute;
top:0px;
left:0px;
visibility="hidden";
transition:2s;
background-color:black;
}

input#submitbutton{
float:right;
margin-top:20px;
width:80px; 
height:40px; 
cursor:pointer;
background-color:rgb(219,68,55);
border:1px solid rgb(219,68,55);
color:#fff;
font-size:18px;
border-radius: 20px;
border-radius: 5px;
box-shadow: 2px 2px 15px rgb(219,68,55);
}


#signupbutton{
display:block;
float:right;
margin-top:20px;
margin-right:20px;
text-decoration:none;
width:80px; 
font-size:18px;
padding-top:3px;
padding-bottom:5px;
padding-left:15px;
 background-color:rgb(219,68,55);//rgb(224,0,52);
border:1px solid rgb(219,68,55));
color:#fff;
padding;0px;
border-radius: 20px;
border-radius: 5px;
box-shadow: 2px 2px 15px rgb(219,68,55);
}

#pagedetails{
color:white;
font-family:verdana;
width:auto;
height:auto;
border-radius:20px;
position:absolute;
font-size:18px;
top:60px;
left:0px;
z-index:1;
line-height:30px;
margin-right:30px;
margin-top:30px;
padding:20px;
}

#loginform{
color:white;
font-family:verdana;
width:auto;
height:auto;
border-radius:20px;
background-color:rgba(255,255,255,.25);
position:absolute;
font-size:18px;
top:60px;
right:0px;
z-index:1;
line-height:30px;
margin-right:30px;
margin-top:30px;
padding:20px;
}

#Snav {
display:block;
width:100%;
height:100%;
position:absolute;
top:0px;
left:0px;
}

#SnavUp{

display:block;
width:100%;
height:20%;
}



#SnavMiddle{
position:relative;
top:300px;
display:block;
width:100%;
height:10%;
margin-top:10%;
}

#Sleft{
width:8%;
height:100%;
float:left;
margin-left:5%;
opacity:0.5;
}
#Sleft:hover{
opacity:0.8;
}
#Sright{
width:8%;
height:100%;
float:right;
margin-right:5%;
opacity:0.5;
}
#Sright:hover{
opacity:0.8;
}

#SnavBottom{
display:block;
width:100%;
height:15%;

position:absolute;
bottom:0;
left:0;
background-color:rgba(0,0,0,0.8);
}


	</style>
	
	<script type="text/javascript">
	
	var nrImg=12;
	var IntSeconds=4;
	
	
	function Load(){
	
	 nrShown=0;
	Vect=new Array(nrImg+10);
	Vect[0]=document.getElementById("img1");
	Vect[0].style.visibility="visible";
	for(var i=1;i<nrImg;i++)
	{
	Vect[i]=document.getElementById("img"+(i+1));
	}
	myTime=setInterval(Timer, IntSeconds *1000);
	}
	
	function Timer(){
	
	nrShown++;
	if(nrShown==nrImg)
	
	 nrShown=0;
	 Effect();
	}
	
	function next(){
	nrShown++;
	if(nrShown==nrImg)
	
	 nrShown=0;
	 Effect();
	 clearInterval(myTime);
	 
	myTime=setInterval(Timer,IntSeconds * 1000);
	 
	}
	function prev(){
	nrShown--;
	if(nrShown==-1)
	
	 nrShown=nrImg-1;
	 Effect();
	  clearInterval(myTime);
	 
	myTime=setInterval(Timer,IntSeconds*1000);
	}
	
	function Effect(){
	 for(var i=0;i<nrImg;i++)
	 {
	  Vect[i].style.opacity="0";
	  Vect[i].style.visibility="hidden";
	 }
	   Vect[nrShown].style.opacity="1";
	 Vect[nrShown].style.visibility="visible";
	}
	
	
	</script>
	
	<title>Login Page</title>
<link rel="icon" type="image/png" href="Icons/logo.png">
	</head>
<body onload="Load()">
     
	 
	 
	<div id="slider">
	
	
	 <div id="pagedetails">
	 <h2>Welcome to Fantasy Premier League.</h2>
	 <br><br><br>
	 <p id="this01" style="font-family:verdana;text-align:left;">
	 Create your own team and mange it.<br>
	 Feel the tense and pressure of managing a professional team.<br>
	 Build your own team from a given budget.</p>
	 </div>   
	<div id="loginform" >
	<?php
if(!isset($_POST['log_in']))
{
?>
		<form action="checklogin.php" method="POST">
Username:&nbsp
<input type="text" name="username"><br>
Password:&nbsp&nbsp
<input type="password" name="password"><br>
<input  id="submitbutton" name="log_in" type="submit" value="Log in" >
<a href="signup.php"  target="_blank" id ="signupbutton">Sign up</a>
</form>
		</div>
		<div id="imgs">
		
		<img id="img12" src="Images/aguero.jpg"/>
		<img id="img11" src="Images/rmvsmanu.jpg"/>
		<img id="img10" src="Images/ronaldo.jpg"/>
		<img id="img9" src="Images/henry.jpg"/>
		<img id="img8" src="Images/rvp_vs_ger.jpg"/>
		<img id="img7" src="Images/lampard.jpg"/>
		<img id="img6" src="Images/galatasaray.jpg"/>
		<img id="img5" src="Images/degea.jpg"/>
		<img id="img4" src="Images/iniesta.jpg"/>
		<img id="img3" src="Images/messi.jpg"/>
		<img id="img2" src="Images/waynerooney.jpg"/>
		<img id="img1" src="Images/pl.jpg"/>
		</div>
		<div id="Snav">
		<div id="SnavUp">
		
		
		</div>
		<div id="SnavMiddle">
		<img id="Sleft" src="Images/left.png" onclick="prev()">
		<img id="Sright" src="Images/right.png" onclick="next()">
		</div>
		 
	       	</div>
	 </div>
	 <!--
	 
<?php
}
else
{
   mysql_connect("localhost","root","") or die(mysql_error());
   mysql_select_db("fpl");
   $query=" Select password from admin where username='".$_POST['username']."'";
   $r=mysql_query($query);
   $row=mysql_fetch_array($r);
   $pass=$row['password'];
   if($pass==$_POST['password'])
   {
      echo "<meta http-equiv='refresh' content='2;url=home.php' />";
   }
   else
   {
  /*  echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
   */}
}
?>-->
	</body>
</html>