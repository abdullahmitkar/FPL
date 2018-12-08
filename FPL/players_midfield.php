<html>
<head>
  <link rel="stylesheet" href="webtech.css">
</head>
<body>
<img src="Images/wp.jpg"id="bodybg1" style="">

<img src="Images/wp.jpg"id="bodybg" style="">
<!--
<img src="Images/wp.jpg" style="width:100%;height:100%;position:fixed;z-index:-4;opacity:0.8;margin:-1%;">
-->
<script type="text/javascript" src="webtech.js"></script>



<div class="siteheader" style="<!--background-image:url('Images/header.jpg')-->">
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
<div></div>

<nav id="navtab101" >
    <ul class=""  style="list-style:none">
        
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
<div class="playernav">
<ul>
<li id="playernav1"><center><a href="players_defence.php">DEFENCE</a></center></li>
<li id="selected"><center><a href="players_midfield.php">MIDFIELD</a></center></li>
<li id="playernav1"><center><a href="players_attack.php">ATTACK</a></center></li>
</ul>
</div>

<div class="playernavdetails2midfield">

<center>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/iniesta1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">

<div id="iniesta" class="playername">
<center>A.Iniesta</center>
<br>
name:buffon<br>
country:italy<br>
club:juve<br>
age:62<br>
<div id="trigger" ><a href="javascript:void(0)" onclick="trigger('iniesta')" style="width:100%;height:100%;"><img id="iniesta1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/pirlo.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="casillas" class="playername">
<center>A.Pirlo</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('casillas')" style="width:100%;height:100%;"><img id="casillas1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/ozil.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="degea" class="playername">
<center>M.Ozil</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('degea')" style="width:100%;height:100%;"><img id="degea1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/alonso.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="cech" class="playername">
<center>X.Alonso</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('cech')" style="width:100%;height:100%;"><img id="cech1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/kroos.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="bravo" class="playername">
<center>T.Kroos</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('bravo')" style="width:100%;height:100%;"><img id="bravo1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/sanchez.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="sanchez" class="playername">
<center>Sanchez</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('sanchez')" style="width:100%;height:100%;"><img id="sanchez1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/bale.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="bale" class="playername">
<center>G.Bale</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('bale')" style="width:100%;height:100%;"><img id="bale1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/reus.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="reus" class="playername">
<center>M.Reus</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('reus')" style="width:100%;height:100%;"><img id="reus" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>


<div class="playercardmargin">
<div class="playercard" style="background:url(Images/dimaria.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="dimaria" class="playername">
<center>A.DiMaria</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('dimaria')" style="width:100%;height:100%;"><img id="dimaria1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>


<div class="playercardmargin">
<div class="playercard" style="background:url(Images/robben.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="robben" class="playername">
<center>A.Robben</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('robben')" style="width:100%;height:100%;"><img id="robben1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>



</center>
</div>
</div>


</div>
</body>
</html>