<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Two Column 2 - Minimaxing by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<header id="header">
								<h1><img src="images/BBLogo-4.gif" style="float:left;width:70px;height:70px;" href="index.html" class="current-page-item" id="logo"><a href="index.html" class="current-page-item" id="logo">League-O-Matic 3000</a></h1>
								<nav id="nav">
									<a href="IntroPage.html">Introduction</a>
									<a href="MakeTeamPage.html">Make A Team</a>
									<a href="JoinTeamPage.php" class="current-page-item">Team Ranks</a>
									<a href="MatchSchedulePage.html">Match Schedule</a>
								</nav>
							</header>
							<section>
								<?php
									$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
									if($sql->connect_errno)
										die("Connection to MySQL database failed: " . $sql->connect_error);
									$query = "SELECT TeamName, Fname, Lname, Hometown, Position FROM Player, Team WHERE Player.TeamNo = Team.TeamNo ORDER BY TeamRank ASC GROUP BY TeamName";

									$result = $sql->query($query);

									if ($result->num_rows > 0){
										while($row = $result->fetch_assoc()){
											echo "Team: " . $row["TeamName"] . " - Name: " . $row["Fname"] . "   " . $row["Lname"] . " - Position: " . $row["Position"] . " - From: " . $row["Hometown"]. "<br>";
										}
									} else {
										echo "0 results";
									}
									
								?>
							</section>

						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row">
						<div class="12u">

							<div id="copyright">
								&copy; Untitled. All rights reserved. | Design: <a href="http://html5up.net">HTML5 UP</a>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>