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
  echo $sub;
 
 $query3="Select team_id,team_name from admin where username='sad'";
  $row3=mysql_query($query3);
  $id=mysql_fetch_array($row3);
  $id1=$id['team_id'];
  $id2=$id['team_name'];

  $query="Select player_id,player_cost from players where player_id='".$_GET['subcat']."'";
  $row=mysql_query($query);
  $player=mysql_fetch_array($row);
  $cost=$player['player_cost'];
  
  if($_GET['cat']==1)
  {
     if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player1 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player1='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
  else if($_GET['player_no']==2)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player2 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player2='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==3)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player3 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player3='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==4)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player4 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player4='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==5)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player5 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player5='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==6)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player6 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player6='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==7)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player7 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player7='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==8)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player8 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player8='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==9)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player9 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player9='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==10)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player10 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player10='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
   else if($_GET['player_no']==11)
  {
       if($sub>0)
	 {
	     
		  $query11="Select player_id,player_cost from players where player_id=(Select player11 from team where team_id='$id1')";
          $row11=mysql_query($query11);
          $player11=mysql_fetch_array($row11);
          $cost11=$player11['player_cost'];
		  $copybudget=$budget;
	      $copybudget=$budget+$cost11;
		if($copybudget-$cost>0)
		 {
		  $budget=$budget+$cost11;
		  $budget=$budget-$cost;
	      echo $budget;
		  $sub--;
		  $query="update leaderboard set substitutions=".$sub." where team_id='$id1'";
	       mysql_query($query);
	      $query="Update admin set budget=".$budget." where username='sad'";
          mysql_query($query); 
		  $query="update team set player11='".$player['player_id']."' where team_id='$id1'";
		  mysql_query($query); 
		  
		 }
		 else
		 {
		   echo "Insufficient budget";
		 }
	 }
	 else
	 {
	   echo "No more substitutions";
	 }
  }
  
  
  ?>