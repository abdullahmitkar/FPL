<?php

  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("fpl");
 
 $query1="Select budget from admin where username='wer'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $budget=$bud['budget'];
  $budget_initial=$budget;
  echo $budget;
  
  $query2="Select substitutions from leaderboard where team_id=(Select team_id from admin where username='wer')";
  $row2=mysql_query($query2);
  $subs=mysql_fetch_array($row2);
  $sub=$subs['substitutions'];
 
 $query3="Select team_id,team_name from admin where username='wer'";
  $row3=mysql_query($query3);
  $id=mysql_fetch_array($row3);
  $id1=$id['team_id'];
  $id2=$id['team_name'];
  
$_SESSION["p1"]=@$_POST['player_1'];
$_SESSION["p2"]=@$_POST['player_2'];
$_SESSION["p3"]=@$_POST['player_3'];
$_SESSION["p4"]=@$_POST['player_4'];
$_SESSION["p5"]=@$_POST['player_5'];
$_SESSION["p6"]=@$_POST['player_6'];
$_SESSION["p7"]=@$_POST['player_7'];
$_SESSION["p8"]=@$_POST['player_8'];
$_SESSION["p9"]=@$_POST['player_9'];
$_SESSION["p10"]=@$_POST['player_10'];
$_SESSION["p11"]=@$_POST['player_11'];

 $query="Select player_id,player_cost from players where player_id='".$_SESSION["p1"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p2"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p3"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p4"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p5"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p6"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p7"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p8"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p9"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p10"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;
  
   $query="Select player_id,player_cost from players where player_id='".$_SESSION["p11"]."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  $budget=$budget-$cost;




 


 


   
  
  
  
  
?>