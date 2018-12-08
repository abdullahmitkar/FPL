<html>

  <link rel="stylesheet" href="webtech.css">
</head>
<body><!--
<img src="Images/w1p.jpg"id="bodybg1" style="">

<img src="Images/w1p.jpg"id="bodybg" style="">-->
<!--<img src="Images/wp.jpg" style="width:100%;height:100%;position:fixed;z-index:-4;opacity:0.8;margin:-1%;">
-->
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
</div><!--
<div class="navtab">
<ul>
<li><a href="home.html">Home</a></li>
<li ><a href="select_team.html">Select Team</a></li>
<li><a href="matchday.html">Matchday</a></li>
<li id="selected"><a href="players_attack.html">Players</a></li>
<li><a href="leaderboard.html">Leaderboard</a></li>
<li><a href="teams.html">Contact Us</a></li>
<li><a href="logout.html"> Logout</a></li>
</ul>
</div>-->
<div></div>

<nav id="navtab101" >
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
<script>
function midfield(){document.getElementById('selected').style.display="none";}</script>
<div class="belownava">
<div class="playernav">
<ul>
<li id="selected"><center><a href="#players_defence.php">DEFENCE</a></center></li>
<li id="playernav1"><center><a href="" onclick="midfield()">MIDFIELD</a></center></li>


<li id="playernav1"><center><a href="players_attack.php">ATTACK</a></center></li>
</ul>
</div>

<div class="playernavdetails2defence">

<center>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/buffon.jpg);background-size: 100% 100%;background-repeat: no-repeat;">

<div id="buffon" class="playername">
<center>G.Buffon</center>
<br>
name:buffon<br>
country:italy<br>
club:juve<br>
age:62<br>
<div id="trigger" ><a href="javascript:void(0)" onclick="trigger('buffon')" style="width:100%;height:100%;"><img id="buffon1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>
<div class="playercardmargin">
<div class="playercard" style="background:url(Images/casillas.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="casillas" class="playername">
<center>I.Casillas</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('casillas')" style="width:100%;height:100%;"><img id="casillas1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/degea1.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="degea" class="playername">
<center>De Gea</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('degea')" style="width:100%;height:100%;"><img id="degea1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/cech.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="cech" class="playername">
<center>P.Cech</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('cech')" style="width:100%;height:100%;"><img id="cech1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/bravo.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="bravo" class="playername">
<center>C.Bravo</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('bravo')" style="width:100%;height:100%;"><img id="bravo1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/ramos.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="ramos" class="playername">
<center>S.Ramos</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('ramos')" style="width:100%;height:100%;"><img id="ramos1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/pique.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="pique" class="playername">
<center>G.Pique</center><div id="trigger" ><a class="anim" href="javascript:void(0)" onclick="trigger('pique')" style="width:100%;height:100%;"><img id="pique1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/hummels.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="hummels" class="playername">
<center>M.Hummels</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('hummels')" style="width:100%;height:100%;"><img id="hummels1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>


<div class="playercardmargin">
<div class="playercard" style="background:url(Images/tsilva.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="tsilva" class="playername">
<center>T.Silva</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('tsilva')" style="width:100%;height:100%;"><img id="tsilva1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>


<div class="playercardmargin">
<div class="playercard" style="background:url(Images/alves.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="alves" class="playername">
<center>D.Alves</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('alves')" style="width:100%;height:100%;"><img id="alves1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/marcelo.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="marcelo" class="playername">
<center>Marcelo</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('marcelo')" style="width:100%;height:100%;"><img id="marcelo1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/alaba.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="alaba" class="playername">
<center>Alaba</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('alaba')" style="width:100%;height:100%;"><img id="alaba1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

<div class="playercardmargin">
<div class="playercard" style="background:url(Images/ivanovic.jpg);background-size: 100% 100%;background-repeat: no-repeat;">
<div id="ivanovic" class="playername">
<center>Ivanovich</center><div id="trigger" ><a class="anim" href="javascript:void(0);" onclick="trigger('ivanovic')" style="width:100%;height:100%;"><img id="ivanovic1" src="Images/arrow.jpg" style="width:100%;"/></a></div>
</div>

</div></div>

</center>
</div>
</div>


</div>
</body>
</html>