<?php

$connect = mysqli_connect("localhost","root","x9fN#DXy","LeagueData");

mysqli_query($connect,"INSERT INTO Player (PlayerID, TeamNo, Fname, Lname, Hometown, Position)
VALUES (52, 10, '$_POST[fname]', '$_POST[lname]', '$_POST[college]', '$_POST[position]')";

?>