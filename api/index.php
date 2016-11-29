<?php

header('Content-Type: application/json');
$response = array();

$sql = mysqli_connect("localhost", "root", "x9fN#DXy", "LeagueData");
//$sql = mysqli_connect("localhost", "root", "", "LeagueData");
if($sql->connect_errno)
	die("Connection to MySQL database failed: " . $sql->connect_error);


$ans = mysqli_query($sql, "Select P.PlayerID, P.Fname, P.Lname, S.* from Player P, PlayerStats S where P.PlayerID = S.PlayerID");
if(mysqli_num_rows($ans) > 0){
	while($row = mysqli_fetch_assoc($ans)){
		$player = array(
			'FirstName' => $row['Fname'],
			'LastName' => $row['Lname'],
			'Points' => $row['TotalPoints'],
			'Assists' => $row['TotalAssists'],
			'Games' => $row['GamesPlayed'],
		);
		$response += array($row["PlayerID"] => $player);
	}
} else {
	$response = array('error' => 'Error while retrieving data.');
}

echo json_encode($response);
