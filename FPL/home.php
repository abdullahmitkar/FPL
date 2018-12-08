<?php
session_start();
?>
<?php
    mysql_connect("localhost","root","") or die(mysql_error());
    mysql_select_db("fpl");
	ini_set('memory_limit', '128M');
	// main leader
	$query="select username,points from leaderboard where points = (select max(points) as maxp from leaderboard ) ";
	$row=mysql_query($query);
	$r=mysql_fetch_array($row);
	$username_leader=$r['username'];
	$points_leader=$r['points'];
	
	// login user
	$query1="select points from leaderboard where username = 'sad'";
	$row1=mysql_query($query1);
	$r1=mysql_fetch_array($row1);
	$points_me=$r1['points']; 
	
	
	// league's best player
	$query="select player_name,total_rat from players where total_rat = (select max(total_rat) as maxr from players ) ";
	$row1=mysql_query($query);
	$r1=mysql_fetch_array($row1);
	
    // your best player	
    

$query11="select total_rat,player_name from players where player_id IN (select player1 from team where team_id IN ( select team_id from admin where username = 'sad'))";	
	$row11=mysql_query($query11);
	$r11=mysql_fetch_array($row11);
	$max_me_points=$r11['total_rat'];
	$player=$r11['player_name'];
	
	$query12="select total_rat,player_name from players where player_id IN(select player2 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row12=mysql_query($query12);
	$r12=mysql_fetch_array($row12);
	$temp=$r12['total_rat'];
	if($temp>$max_me_points)
	{	$max_me_points=$temp;
	    $player=$r12['player_name'];
	}

	$query13="select total_rat,player_name from players where player_id IN(select player3 from team where team_id =( select team_id from admin where username = 'sad'))";	
	$row13=mysql_query($query13);
	$r13=mysql_fetch_array($row13);
	$temp=$r13['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r13['player_name'];
	}

	
	$query14="select total_rat,player_name from players where player_id IN(select player4 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row14=mysql_query($query14);
	$r14=mysql_fetch_array($row14);
	$temp=$r14['total_rat'];
	if($temp>$max_me_points)
	{	$max_me_points=$temp;
	    $player=$r14['player_name'];
	}

	
	
	
	$query15="select total_rat,player_name from players where player_id IN(select player5 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row15=mysql_query($query15);
	$r15=mysql_fetch_array($row15);
	$temp=$r15['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r15['player_name'];
	}

	
	
	
	$query16="select total_rat,player_name from players where player_id IN(select player6 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row16=mysql_query($query16);
	$r16=mysql_fetch_array($row16);
	$temp=$r16['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r16['player_name'];
	}

		
	$query17="select total_rat,player_name from players where player_id IN(select player7 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row17=mysql_query($query17);
	$r17=mysql_fetch_array($row17);
	$temp=$r17['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r17['player_name'];
	}


    
    $query18="select total_rat,player_name from players where player_id IN(select player8 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row18=mysql_query($query18);
	$r18=mysql_fetch_array($row18);
	$temp=$r18['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r18['player_name'];
	}



     $query19="select total_rat,player_name from players where player_id IN(select player9 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row19=mysql_query($query19);
	$r19=mysql_fetch_array($row19);
	$temp=$r19['total_rat'];
	if($temp>$max_me_points)
		{	$max_me_points=$temp;
	    $player=$r19['player_name'];
	}



    $query20="select total_rat,player_name from players where player_id IN(select player10 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row20=mysql_query($query20);
	$r20=mysql_fetch_array($row20);
	$temp=$r20['total_rat'];
	if($temp>$max_me_points)
	{	$max_me_points=$temp;
	    $player=$r20['player_name'];
	}



     $query21="select total_rat,player_name from players where player_id IN(select player6 from team where team_id IN( select team_id from admin where username = 'sad'))";	
	$row21=mysql_query($query21);
	$r21=mysql_fetch_array($row21);
	$temp=$r21['total_rat'];
	if($temp>$max_me_points)
	{	$max_me_points=$temp;
	    $player=$r21['player_name'];
	}
	
	
		
	
	
	?>

<html>
<head><link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="webtech.css">
</head>
<body>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
<img src="Images/wp.jpg"id="bodybg1" style="">

<img src="Images/wp.jpg"id="bodybg" style="">
<script type="text/javascript" src="webtech.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<div id="sh11" class="siteheader">
<div id="text">
<div id="text1">


</div>
<a id="trivia" onclick="trivia()">
Learn something Interesting about your favourite Club
</a>
<div id="text2">
</div>
<a id="quiz" onclick="quiz()">Take a quiz to see how much you know your favourite club
</a>


<div id="option1" onclick="option1()"><a>OPtion1</a></div>
<div id="option2" onclick="option2()"><a >OPtion2</a></div>
<div id="option3" onclick="option3()"><a >OPtion3</a></div>
<div id="option4" onclick="option4()"><a >OPtion4</a></div>


<div id="nexttrivia"><a onclick="nexttrivia()">Nexttrivia</a></div>
<div id="notinterested"><a onclick="notinterested()">notInterestd</a></div>
<div id="quizbutton" onclick="quizquestions()">Go For it<a ></a></div>
<div id="goback"><a onclick="goback()">Goback</a></div>
</div>
<!--<img src="logo.png"/>
<div class="logo">
<span><center>Fantasy Premier League</center></span>

<span id="tagline"><center>live the dream</center></span>
</div>-->
<img id="image0001" src="Images/cover.jpg" style="width:100%;height:100%;position:relative;overflow:hidden">
</div>
<!--
<div id="navtab101" style="display:none" class="navtab">
<ul>
<li id="selected"><a href="home.html">Home</a></li>
<li id="hash1" ><a href="select_team.html">Select Team</a></li>
<li id="hash2" ><a href="matchday.html">Matchday</a></li>
<li id="hash3"><a href="players_attack.html">Players</a></li>
<li id="hash4"><a href="leaderboard.html">Leaderboard</a></li>
<li id="hash5"><a href="teams.html">Contact Us</a></li>
<li id="hash6"><a href="logout.html"> Logout</a></li>
<li  id="customize">Customize
<ul>
<li id="hash7" onclick="backgroundimage()" style="background-color:#656565;"><a>Background Image</a></li>
<li id="hash8"><a onclick="">Header Image</a>
<ul>

<li id="hash9"><a onclick="headerimage('default')">Default</a></li>
<li id="hash10"><a accesskey="m" onclick="headerimage('manu')"> Manchester United</a></li>
<li id="hash11"><a onclick="headerimage('fcb')">F.C.Barcelona</a></li></ul>
</li>
</ul>
</li>

</ul>
</div>
-->
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
<div class="homepage">

<!--<div class="loginid">You are logged in as <b>Abdullah Mitkar</b></div>-->
<div class="tabs">
<div class="tab1"><a class="waves-effect"><img src="Images/formation.jpg"/><p>Select Squad<br><br>
Use your budget of 100m <br>to pick a squad of 15 <br>players  from the Fantasy <br>Premier League.</p></a></div>

<div class="tab2">
<div class="tab11"> <div class="tab111"><img src="Images/participationribbon.jpg"/><p>&nbsp2</p> </div><div  class="tab1121"><img src="Images/table.jpg" /><p><?php  ?><br><span style="font-size:30%;margin-top:0%;position:absolute;top:85%;left:10%;">abdullahmitkar</span></p></div></div>
<div class="tab11"> <div class="tab111"><a class="waves-effect"><img id="leader" src="Images/leader.jpg"/></a></div> <div class="tab112"><a class="waves-effect"><img src="Images/table.jpg"/><p><?php  ?><br><span style="font-size:30%;margin-top:0%;position:absolute;top:85%;left:10%;"><?php  ?></span></p></a></div></div>
<div class="tab12" onhover="alert('hover')"><a class="waves-effect"><img src="Images/ronaldo1.jpg"/><p>Your<br> best <br>player</p></a></div>
<div class="tab13"><a class="waves-effect"><img src="Images/messi1.jpg"/><p>League's <br>best<br> player</p></div></a>
</div>
<div class="tab3" ><img src="Images/playerstats.jpg"/><p><span>Player Stats</span><br><br>Check out the average <br>rating of players<br> and decide your next<br> substitutions wisely.</p></div>
<div class="tab4"><a class="waves-effect"><img src="Images/expert-advice.jpg"/> <p>Expert Advice<br><br>
Having trouble <br>selecting squad?<br>Take our experts' advice.</p></a></div>
</div>

</div>





</body>
</html>