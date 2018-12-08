<html>
<head>
   <link rel="stylesheet" href="webtech.css">
   
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/></head>
<body>

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

<!--<img src="logo.png"/>
<div class="logo">
<span><center>Fantasy Premier League</center></span>

<span id="tagline"><center>live the dream</center></span>
</div>-->
</div><!--
<div class="navtab">
<ul>
<li><a href="home.html">Home</a></li>
<li><a href="select_team.html">Select Team</a></li>
<li><a href="matchday.html">Matchday</a></li>
<li><a href="players_attack.html">Players</a></li>
<li id="selected"><a href="leaderboard.html">Leaderboard</a></li>
<li><a href="teams.html">Contact Us</a></li>
<li><a href="logout.html"> Logout</a></li>
</ul>
</div>-->


<nav id="navtab101">
    <ul class="" >
        
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
<!--
<div class="leaderboard">
<div class="leaderboardleader"></div>
<div class="leaderboardyou">

<div class="teamposition"></div>
</div>
<div class="leaderboardb">
<div class="leaderboardbteams">
</div>
<div class="leaderboardbteams"></div>
<div class="leaderboardbteams"></div>
<div class="leaderboardbteams"></div>
</div>
</div>-->



<!--
<ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><center><p>First</p></div>
      <div class="collapsible-body"><p>Team1Vs team2</p></div>
    </li>
    <li>
      <div class="collapsible-header"><center><p>Second</p></div>
      <div class="collapsible-body"><p>Team1 vsteam2</p></div>
    </li>
    <li>
      <div class="collapsible-header"><center><p>Third</p></div>
      <div class="collapsible-body"><p>team1vsteam2</p></div>
    </li>
	<li>
      <div class="collapsible-header"><center><p>fourth</p></div>
      <div class="collapsible-body"><p>team1vsteam2</p></div>
    </li>
	<li>
      <div class="collapsible-header"><center><p>fifth</p></div>
      <div class="collapsible-body"><p>team1vsteam2</p></div>
    </li>
  </ul>

  
  
  -->

  
  

  
  
 
<?php
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("fpl");
	
?>
  








	  
	  <ul class="collapsible popout" data-collapsible="accordion" style="width:80%;margin-left:10%;">
   
	
	
	
	
	
    <li>
      <div class="collapsible-header"><center><p>
	  <table class="striped">
  <tr> 
  <div id="one">Position</div>
  <div id="two">Username</div>
  <div id="three">TeamID</div>
  <div id="four">Points</div>
  
  </tr></table>
	  
	  
	  
	  </p></div>
    </li>
	
	
	
	
  </ul>

	  
	  




<?php
	$n=0;
	$query="SELECT * from leaderboard ORDER by points DESC";
	$r=mysql_query($query);
	while($row=mysql_fetch_array($r))
	{
	$n++;
	
?><ul class="collapsible popout" data-collapsible="accordion" style="width:80%;margin-left:10%;">
 <li>
      <div class="collapsible-header"><center><p>
<table class="striped" style="position:relative;padding:0%;">
      <tr>
	  
  <div id="one"><?php echo $n;?></div>
  <div id="two"><?php echo $row['username'];?></div>
  <div id="three"><?php echo $row['team_id']; ?></div>
  <div id="four"><?php echo $row['points'];?></div>
  </tr></table> </p></div>
  <div class="collapsible-body"><p>
Teams ayega idhar of concerned player_id
  
  
  </p></div>
    </li></ul>
<?php
}$n=0;
?>

	  

</div>








</body>
</html>