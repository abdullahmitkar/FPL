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
background-color:rgb(224,0,52);
border:1px solid rgb(224,0,52);
color:#fff;
font-size:18px;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
border-radius: 5px;
-webkit-box-shadow: 0 0 10px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 10px rgba(0,0,0, .75);
box-shadow: 2px 2px 15px rgba(0,0,0, .75);
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
 background-color:rgb(224,0,52);
border:1px solid rgb(224,0,52);
color:#fff;
padding;0px;
-webkit-border-radius: 20px;
-moz-border-radius: 20px;
border-radius: 5px;
-webkit-box-shadow: 0 0 10px rgba(0,0,0, .75);
-moz-box-shadow: 0 0 10px rgba(0,0,0, .75);
box-shadow: 2px 2px 15px rgba(0,0,0, .75);
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
		<form action="try.php" method="POST">
Username:&nbsp
<input type="text" name="username"><br>
Password:&nbsp&nbsp
<input type="password" name="password"><br>
<input  id="submitbutton" name="log_in" type="submit" value="Log in" >
<a href="signup.php"  target="_blank" id ="signupbutton">Sign up</a>
</form>
		</div>
		<div id="imgs">
		
		<img id="img12" src="http://dc583.4shared.com/img/JwajUDigba/s7/14ea7ba47c0/aguero?async&rand=0.4253043266944587"/>
		<img id="img11" src="http://dc598.4shared.com/img/OfglS5Ofba/s7/14ea7ce0e40/rmvsmanu?async&rand=0.5566059618722647"/>
		<img id="img10" src="http://dc598.4shared.com/img/MKLkHX4cba/s7/14ea7cea2b0/ronaldo?async&rand=0.20283114397898316"/>
		<img id="img9" src="http://dc598.4shared.com/img/OzqrHC6Yba/s7/14ea7cad608/henry?async&rand=0.3626225588377565"/>
		<img id="img8" src="http://dc598.4shared.com/img/9506v10_ba/s7/14ea7cec9c0/rvp_vs_ger?async&rand=0.5136234387755394"/>
		<img id="img7" src="http://dc598.4shared.com/img/HB9sJ3AJce/s7/14ea7cd8970/lampard?async&rand=0.4849927262403071"/>
		<img id="img6" src="http://dc598.4shared.com/img/mBWzKKSZce/s7/14ea7c9f760/galatasaray?async&rand=0.0963403342757374"/>
		<img id="img5" src="http://dc598.4shared.com/img/_9gvoAloba/s7/14ea7c9eba8/degea?async&rand=0.6927944289054722"/>
		<img id="img4" src="http://dc598.4shared.com/img/1wd7e5K7ce/s7/14ea7cd23e0/iniesta?async&rand=0.26874815789051354"/>
		<img id="img3" src="http://dc598.4shared.com/img/0HcW0iI3ba/s7/14ea7cdc7f0/messi?async&rand=0.005168663337826729"/>
		<img id="img2" src="http://dc598.4shared.com/img/dpebgzg8ba/s7/14ea7cfac50/waynerooney?async&rand=0.6537567991763353"/>
		<img id="img1" src="http://dc598.4shared.com/img/uV6W3wsyce/s7/14ea7cdd790/pl_online?async&rand=0.2414400561247021"/>
		</div>
		<div id="Snav">
		<div id="SnavUp">
		
		
		</div>
		<div id="SnavMiddle">
		<img id="Sleft" src="http://dc598.4shared.com/img/jfgRU5agce/s7/14ea7cd8970/left?async&rand=0.0397627588827163" onclick="prev()">
		<img id="Sright" src="http://dc598.4shared.com/img/KQ5IM2ouce/s7/14ea7cdd790/right?async&rand=0.07762239454314113" onclick="next()">
		</div>
		 
	       	</div>
	 </div>
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
      echo "<meta http-equiv='refresh' content='2;url=upload_pic.php' />";
   }
   else
   {
    echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
   }
}
?>
	</body>
</html>