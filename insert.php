<?php

$connect = mysqli_connect("localhost","root","x9fN#DXy","LeagueData");

mysqli_query($connect,"INSERT INTO Player (PlayerID, TeamNo, Fname, Lname, Hometown, Position)
VALUES (52, 10, '$_POST[fname]', '$_POST[lname]', '$_POST[college]', '$_POST[position]')";

mysqli_query($connect,"INSERT INTO PlayerStats (PlayerID, TotalPoints, TotalAssists, GamesPlayed)
VALUES (52, rand(0, 30), rand(0, 15), rand(0, 4))";             
?>
