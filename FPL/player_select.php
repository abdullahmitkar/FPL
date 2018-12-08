<?php
session_start();
?>
<?php
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("fpl");
 
 $query1="Select budget from admin where username='sad'";
  $row1=mysql_query($query1);
  $bud=mysql_fetch_array($row1);
  $budget=$bud['budget'];
  echo $budget;
  
  $query2="Select substitutions from leaderboard where team_id=(Select team_id from admin where username='sad')";
  $row2=mysql_query($query2);
  $subs=mysql_fetch_array($row2);
  $sub=$subs['substitutions'];
 
 $query3="Select team_id,team_name from admin where username='sad'";
  $row3=mysql_query($query3);
  $id=mysql_fetch_array($row3);
  $id1=$id['team_id'];
  $id2=$id['team_name'];

  $query="Select player_id,player_cost from players where player_id='".$_GET['subcat']."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  ?>


<br><br>


  <?php
  //8 creating team

  
  if($_GET['cat']==1)
  {
     if($budget-$cost>=0)
  {   
     if($_SESSION["p1"]==0)
	 {
	 $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p1"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  $_SESSION["no"]++;
	  echo $_SESSION["no"];
	 }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p1"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p1"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	//  $_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }

  }
  else if($_GET['player_no']==2)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p2"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p2"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	   $_SESSION["no"]++;
	   	   echo $_SESSION["no"];
		    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p2"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p2"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	//  $_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }
  }
  else if($_GET['player_no']==3)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p3"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p3"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
     $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	   	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p3"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p3"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }
  }
  else if($_GET['player_no']==4)
  {
      if($budget-$cost>=0)
  {
  if($_SESSION["p4"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p4"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	      	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p4"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p4"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }
  }
  else if($_GET['player_no']==5)
  {
      if($budget-$cost>=0)
  {
     if($_SESSION["p5"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p5"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
      $_SESSION["no"]++;	
	   echo $_SESSION["no"];
     	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p5"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p5"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }	   
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }
  }
  else if($_GET['player_no']==6)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p6"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p6"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	     	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p6"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p6"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }	
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  }
  else if($_GET['player_no']==7)
  {
      if($budget-$cost>=0)
  {
     if($_SESSION["p7"]==0)
	 {	 
	 $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p7"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	       	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p7"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p7"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  }
  else if($_GET['player_no']==8)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p8"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p8"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	          	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p8"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p8"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  }
  else if($_GET['player_no']==9)
  {
      if($budget-$cost>=0)
  {
	   if($_SESSION["p9"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p9"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	            	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p9"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p9"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  }
  else if($_GET['player_no']==10)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p10"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p10"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query);
 $_SESSION["no"]++;	  
 	   echo $_SESSION["no"];
	               	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p10"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p10"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget"; 
       echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  }
  else if($_GET['player_no']==11)
  {
      if($budget-$cost>=0)
  {
	  if($_SESSION["p11"]==0)
	 {
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p11"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	   $_SESSION["no"]++;
	   echo $_SESSION["no"];
	                 	    }
	 else
	 {
     $query11="Select player_id,player_cost from players where player_id='".$_SESSION["p11"]."'";
     $row11=mysql_query($query11);
     $player11=mysql_fetch_array($row11);
     $cost11=$player11['player_cost'];
	 $budget=$budget+$cost11;
	 
	  $budget=$budget-$cost;
	  echo $budget;
	  $_SESSION["p11"]=$player['player_id'];
	  $query="Update admin set budget=".$budget." where username='sad'";
      mysql_query($query); 
	  //$_SESSION["no"]++;
	   echo $_SESSION["no"];
	 }
  }
  else
  {
	  echo "Insufficient budget";
           echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";	  
  }
  }
  if($_SESSION["no"]==11)
  {
   $query="Insert into team(team_id,team_name,player1,player2,player3,player4,player5,player6,player7,player8,player9,player10,player11) Values('$id1','$id2','".$_SESSION["p1"]."','".$_SESSION["p2"]."','".$_SESSION["p3"]."','".$_SESSION["p4"]."','".$_SESSION["p5"]."','".$_SESSION["p6"]."','".$_SESSION["p7"]."','".$_SESSION["p8"]."','".$_SESSION["p9"]."','".$_SESSION["p10"]."','".$_SESSION["p11"]."')";
  mysql_query($query);
  echo "<meta http-equiv='refresh' content='2;url=player_select.php' />";
  }
  else
  {
     echo "<meta http-equiv='refresh' content='2;url=select_teamf.php' />";
  }
  
  
  
?>