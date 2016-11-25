<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Make your own Team</title>
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
								<h1><img src="images/BBLogo-4.gif" style="float:left;width:70px;height:70px;" href="index.html" ><a href="index.html" id="logo">League-O-Matic 3000</a></h1>
								<nav id="nav">
									<a href="IntroPage.html">Introduction</a>
									<a href="MakeTeamPage.html">Make A Team</a>
									<a href="JoinTeamPage.php" class="current-page-item">Team Ranks</a>
									<a href="MatchSchedulePage.html">Match Schedule</a>
								</nav>
							</header>

						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="8u 12u(mobile)">

							<section class="left-content">
								<?php
									$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
									if($sql->connect_errno)
										die("Connection to MySQL database failed: " . $sql->connect_error);
									$query = "SELECT TeamRank, TeamName, Wins, Losses FROM Standings, Team WHERE Standings.TeamNo = Team.TeamNo ORDER BY TeamRank ASC";

									$result = $sql->query($query);

									if ($result->num_rows > 0){
										while($row = $result->fetch_assoc()){
											echo "Rank: " . $row["TeamRank"] . " - TeamName: " . "<a href="ViewPlayers.php">" . $row["TeamName"] . "</a>" . " - Wins: " . $row["Wins"] . " - Losses: " . $row["Losses"]. "<br>";
										}
									} else {
										echo "0 results";
									}
									
								?>
							</section>
							<section class="right-content">
	
							</section>
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