<?php

$playerlist = file_get_contents('http://stats.nba.com/stats/commonallplayers?IsOnlyCurrentSeason=0&LeagueID=00&Season=2016-17');
$playerlist = json_decode($playerlist, true);

/*echo "<pre>";
print_r($obj);
echo "</pre>"; // */

$sql = new mysqli("localhost:3306", "root", "x9fN#DXy", "LeagueData");
if($sql->connect_errno)
	die("Connection to MySQL database failed: " . $sql->connect_error);
$sql->query("DELETE FROM PlayerStats; DELETE FROM Player;");

for($i = 1; $i <= 45; $i++){
	$j = rand(0, count($playerlist['resultSets'][0]['rowSet']));
	$pid = $playerlist['resultSets'][0]['rowSet'][$j][0];
	
	$playerinfo = file_get_contents('http://stats.nba.com/stats/commonplayerinfo?PlayerID=' . $pid);
	$playerinfo = json_decode($playerinfo, true);
	$fname = explode(", ", $playerlist['resultSets'][0]['rowSet'][$j][1])[1];
	$lname = explode(", ", $playerlist['resultSets'][0]['rowSet'][$j][1])[0];
	$hometown = $playerinfo['resultSets'][0]['rowSet'][0][7];
	$position = $playerinfo['resultSets'][0]['rowSet'][0][14];
	$query = "INSERT INTO Player VALUES($i, " . intval(($i-1)/5+1) . ", \"$fname\", \"$lname\", \"$hometown\", \"$position\");";
	echo $query;
	try{
		$sql->query($query);
	} catch(Exception $err){
		die("Query $query failed: $err");
	}
	echo "<br>";
	echo "<br>";
}
