<?php

$playerlist = file_get_contents('http://stats.nba.com/stats/commonallplayers?IsOnlyCurrentSeason=0&LeagueID=00&Season=2016-17');
$playerlist = json_decode($playerlist, true);

/*echo "<pre>";
print_r($obj);
echo "</pre>"; // */

$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
if($sql->connect_errno)
	die("Connection to MySQL database failed: " . $sql->connect_error);
$a = $sql->query("DELETE FROM PlayerStats;");
$a = $sql->query("DELETE FROM Player;");
if($sql->connect_errno)
	die("Delete failed: " . $sql->connect_error);

for($i = 1; $i <= 45; $i++){
	$j = rand(0, count($playerlist['resultSets'][0]['rowSet']));
	$pid = $playerlist['resultSets'][0]['rowSet'][$j][0];
	
	$playerinfo = file_get_contents('http://stats.nba.com/stats/commonplayerinfo?PlayerID=' . $pid);
	$playerinfo = json_decode($playerinfo, true);
	$fname = explode(", ", $playerlist['resultSets'][0]['rowSet'][$j][1])[1];
	$lname = explode(", ", $playerlist['resultSets'][0]['rowSet'][$j][1])[0];
	$college = $playerinfo['resultSets'][0]['rowSet'][0][7];
	$position = $playerinfo['resultSets'][0]['rowSet'][0][14];
	$query = 'INSERT INTO Player(PlayerID, TeamNo, Fname, Lname, College, Position) VALUES('.$i.', ' . intval(($i-1)/5+1) . ', \'' . str_replace("'", "\\'", $fname) .  '\', \'' . str_replace("'", "\\'", $lname) . '\', \'' . str_replace("'", "\\'", $college) . '\', \'' .str_replace("'", "\\'", $position).'\');';
	echo $query;
	try{
		$a = $sql->query($query);
		echo "<p>$a</p>";
		if($sql->connect_errno)
			die("Query failed: " . $sql->connect_error);
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "---";
		echo mysql_error();
	}
	echo "<br>";
	echo "<br>";
}
