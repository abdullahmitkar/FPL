<html>
<head>
  <link rel="stylesheet" href="webtech.css">
</head>
<body>
<img src="Images/wp.jpg"id="bodybg1" style="">

<img src="Images/wp.jpg"id="bodybg" style="">
<!--<img src="Images/wp.jpg" style="width:100%;height:100%;position:fixed;z-index:-4;opacity:0.8;margin:-1%;">
-->
<script type="text/javascript" src="webtech.js"></script>



<div class="siteheader">
<!--<img src="logo.png"/>
<div class="logo">
<span><center>Fantasy Premier League</center></span>

<span id="tagline"><center>live the dream</center></span>
</div>-->
<img src="Images/cover.jpg" style="width:100%;height:100%;">
</div><!--
<div class="navtab">
<ul>
<li><a href="home.html">Home</a></li>
<li><a href="select_team.html">Select Team</a></li>
<li><a href="matchday.html">Matchday</a></li>
<li  id="selected"><a href="players_attack.html">Players</a></li>
<li><a href="leaderboard.html">Leaderboard</a></li>
<li><a href="teams.html">Contact Us</a></li>
<li><a href="logout.html"> Logout</a></li>
</ul>
</div>-->

<nav id="navtab101">
    <ul class="" style="list-style:none">
        
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

<div></div>



<div class="belownava">
<div class="playernav">
<ul>
<li id="playernav1"><center><a href="players_defence.php">DEFENCE</a></center></li>
<li id="playernav1"><center><a href="players_midfield.php">
MIDFIELD</a></center></li>
<li id="selected"><center><a href="players_attack.html">ATTACK</a></center></li>
</ul>
</div>

<div id="attacker" class="playernavdetails2attack">

<center>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/messi1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">

<div id="lmessi" class="playername">
<center>L.Messi</center>
<br>
name:buffon<br>
country:italy<br>
club:juve<br>
age:62<br>
<div id="trigger" ><a href="javascript:void(0)" onclick="trigger('lmessi')" style="width:100%;height:100%;"><img id="lmessi1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/ronaldo1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="cronaldo" class="playername">
<center>C.Ronaldo</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('cronaldo')" style="width:100%;height:100%;"><img id="cronaldo1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/rooney1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="wrooney" class="playername">
<center>W.Rooney</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('wrooney')" style="width:100%;height:100%;"><img id="wrooney1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/ibra.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="ibra" class="playername">
<center>Z.Ibrahimovic</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('ibra')" style="width:100%;height:100%;"><img id="ibra1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/aguero1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="saguero" class="playername">
<center>S.Aguero</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('saguero')" style="width:100%;height:100%;"><img id="saguero1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/lewa.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="lewa" class="playername">
<center>R.Lewandowski</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('lewa')" style="width:100%;height:100%;"><img id="lewa1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/suarez.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="suarez" class="playername">
<center>L.Suarez</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('suarez')" style="width:100%;height:100%;"><img id="suarez1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>






</center>
</div>

</div>


</div>
</body>
</html>