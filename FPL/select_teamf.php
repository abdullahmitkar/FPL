<?php
session_start();
/*$_SESSION["no"]=0;
$_SESSION["p1"]=0;
$_SESSION["p2"]=0;
$_SESSION["p3"]=0;
$_SESSION["p4"]=0;
$_SESSION["p5"]=0;
$_SESSION["p6"]=0;
$_SESSION["p7"]=0;
$_SESSION["p8"]=0;
$_SESSION["p9"]=0;
$_SESSION["p10"]=0;
$_SESSION["p11"]=0;
*/
?>


<?php
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("fpl");
 $query1="Select budget from admin where team_id=5";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $budget=$bud['budget'];
  if(isset($_SESSION["p1"])){
  $query1="select player_name from players where player_id='".$_SESSION["p1"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play1=$bud['player_name'];
  }else{
  $play1="";
  }
  if(isset($_SESSION["p2"])){
  $query1="select player_name from players where player_id='".$_SESSION["p2"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play2=$bud['player_name'];
  }
	else{
	$play2="";	
	}
  if(isset($_SESSION["p3"])){
  $query1="select player_name from players where player_id='".$_SESSION["p3"]."'" ;;
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play3=$bud['player_name'];
  }
  else{
	  $play3="";
  }
  if(isset($_SESSION["p4"])){
  $query1="select player_name from players where player_id='".$_SESSION["p4"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play4=$bud['player_name'];
  
  }
  else {
	  $play4="";
  }
  if(isset($_SESSION["p5"])){
  $query1="select player_name from players where player_id='".$_SESSION["p5"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play5=$bud['player_name'];
  
  }
  else{
	  $play5="";
  }
  if(isset($_SESSION["p6"])){
  $query1="select player_name from players where player_id='".$_SESSION["p6"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play6=$bud['player_name'];
  }
  else{
	  $play6="";
  }
  if(isset($_SESSION["p7"])){
  $query1="select player_name from players where player_id='".$_SESSION["p7"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play7=$bud['player_name'];
  
  }
  else{
	  $play7="";
  }
  if(isset($_SESSION["p8"])){
  $query1="select player_name from players where player_id='".$_SESSION["p8"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play8=$bud['player_name'];
  
  }
  else {
	  $play8="";
  }
  if(isset($_SESSION["p9"])){
  $query1="select player_name from players where player_id='".$_SESSION["p9"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play9=$bud['player_name'];
  
  }
  else{
	  $play9="";
  }
  if(isset($_SESSION["p10"])){
  $query1="select player_name from players where player_id='".$_SESSION["p10"]."'";
  
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play10=$bud['player_name'];
  }
  else{
	  $play10="";
  }
  if(isset($_SESSION["p11"])){
  $query1="select player_name from players where player_id='".$_SESSION["p11"]."'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $play11=$bud['player_name'];
  
  }
  else{
	  $play11="";
  }
  
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>  <link rel="stylesheet" href="webtech.css">

<script>
function reload(form)
{
var val=form.cat.options[form.cat.options.selectedIndex].value; 
self.location='select_teamf.php?cat=' + val ;
}





</script>

  <link rel="stylesheet" href="webtech.css">
</head>
<body >

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<img src="Images/wp.jpg"id="bodybg1" style="">

<img src="Images/wp.jpg"id="bodybg" style="">
<script type="text/javascript" src="webtech.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<div class="siteheader">
<!--<img src="logo.png"/>
<div class="logo">
<span><center>Fantasy Premier League</center></span>

<span id="tagline"><center>live the dream</center></span>
</div>-->
<img src="Images/cover.jpg" style="width:100%;height:100%;">
</div>
<!--
<div class="navtab">
<ul>
<li><a href="home.html">Home</a></li>
<li id="selected"><a href="select_team.html">Select Team</a></li>
<li><a href="matchday.html">Matchday</a></li>
<li><a href="players_attack.html">Players</a></li>
<li><a href="leaderboard.html">Leaderboard</a></li>
<li><a href="teams.html">Contact Us</a></li>
<li><a onclick="playermove();"> Logout</a></li>
</ul>
</div>-->





<nav id="navtab101">
    <ul class=""  style="list-style-type: none;">
    
<li id="selected"><a class="waves-effect " href="home.php">Home</a></li>
<li id="hash1" ><a class="waves-effect " href="select_teamf.php">Select Team</a></li>
<li id="hash2" ><a class="waves-effect " href="matchday.php">Matchday</a></li>
<li id="hash3"><a class="waves-effect " href="players_attack.php">Players</a></li>
<li id="hash4"><a class="waves-effect " href="leaderboard.php">Leaderboard</a></li>
<!--<li id="hash5"><a class="waves-effect " href="teams.html">Contact Us</a></li>
<li id="hash6"><a class="waves-effect " href="logout.html"> Logout</a></li>-->
	 <li  id="customize"><a class="waves-effect ">Customize</a>
<ul id="customizeul" >
<li id="hash7" class="waves-effect" onclick="backgroundimage()">Background Image</li>
<li id="hash8"><a class="waves-effect " onclick=""><center>&nbsp;Header Image</center></a>
<ul id="culul">

<li id="hash9"><a class="waves-effect " onclick="headerimage('default')">Default</a></li>
<li id="hash10"><a class="waves-effect " onclick="headerimage('manu')"> Manchester United</a></li>
<li id="hash11"><a class="waves-effect " onclick="headerimage('fcb')">F.C.Barcelona</a></li></ul>
</li>
</ul>
</li>
    </ul>

</nav>



<div class="belownava">


<div class="selectteam1">

<div class="budget"><center><?php echo $budget;?></center>


<script>
</script>
</div>

<div class="substitutions"><center><a href="substitutions.php">Substitutions</a></center></div>

<!--
<div class="validcheck"><center>Validation Check</center></div>
-->
<div class="teamselected">
<img src="Images/field.png" style="opacity:0.5;"/>
<div class="st_gk">
<center>
<div class="playerselected">
<?php echo $play1;?></div>
</div>
<div class="st_df">
<center>
<div class="playerselected">

<?php echo $play2;?>
<script>


</script>

</div>
<div class="playerselected">
<?php echo $play3;?>
</div>
<div class="playerselected">

<?php echo $play4;?></div>
<div class="playerselected">

<?php echo $play5;?></div>
</div>
<div id="thismf" class="st_md">
<center>
<div class="playerselected">

<?php echo $play6;?></div>
<div class="playerselected">

<?php echo $play7;?></div>
<div class="playerselected">

<?php echo $play8;?></div>
</center>
</div>
<div class="st_at">
<center>
<div class="playerselected">

<?php echo $play9;?></div>
<div class="playerselected">
<?php echo $play10;?>
</div>
<div class="playerselected">
<?php echo $play11;?>
</div>
</div>
<div class="teambutton"><center>
<input type="submit" value="Submit Team">

</div>
</div></div>
<div class="selectteam2">
<div  style=""><!-set class tempheader-->
	
  <form action="player_select.php" method="get">
  
  <?php
  $dbhost_name = "localhost"; // Your host name 
$database = "fpl";       // Your database name
$username = "root";            // Your login userid 
$password = "";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
} // Your Database details 


$quer2="SELECT DISTINCT position,type FROM player_type order by type";

@$cat=$_GET['cat']; // This line is added to take care if your global variable is off
if(isset($cat) and strlen($cat) > 0){
$quer="SELECT DISTINCT player_id,player_name,player_cost FROM players where type=$cat order by player_name"; 
}else{$quer="SELECT DISTINCT player_id,player_name,player_cost FROM players order by player_name"; }

echo " <center>
<br><b>Player Type</b>
<br> <br>";
//first list 
echo "<select id='selectbox' name='cat' onchange=\"reload(this.form)\"><option  value=''>Select position</option>";
foreach ($dbo->query($quer2) as $noticia2) {
if($noticia2['type']==@$cat){echo "<option id='option' selected value='$noticia2[type]'>$noticia2[position]</option>"."<BR>";}
else{echo  "<option value='".$noticia2[type]."'>$noticia2[position]</option>";}
}
echo "</select>";

echo " <br>
<br><center><b>Player</b>
<br><br> ";
//second list
echo "<select id='selectboxname' name='subcat' ><option value=''>Select player</option>";
foreach ($dbo->query($quer) as $noticia) {
echo  "<option value='$noticia[player_id]'>$noticia[player_name] € $noticia[player_cost]M</b></option>";}
echo "</select><br>";


if(@$_GET['cat']==2)
{ 
echo "<br><b><center>Player Position<b><br><br>";
?>
<select id="selectbox" name="player_no">
<option value="2">Player2</option>
<option value="3">Player3</option>
<option value="4">Player4</option>
<option value="5">Player5</option>
</select>
<br>
<?php
}

if(@$_GET['cat']==3)
{
echo "<br><center><b>Player Position</b><br><br>";
?>
<select id="selectbox" name="player_no">
<option value="6">Player6</option>
<option value="7">Player7</option>
<option value="8">Player8</option>
</select>
<br>
<?php
}

if(@$_GET['cat']==4)
{
echo "<br><b><center>Player Position</b><br><br>";
?>
<select id="selectbox" name="player_no">
<option value="9">Player9</option>
<option value="10">Player10</option>
<option value="11">Player11</option>
</select>
<br>
<?php
}

?>
<br>

<input type="submit" id="selectbox1" name="player" value="Select">
<script></script>
</form>


</div>
</div>

</body>
</html>