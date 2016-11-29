<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Check out the latest and updated Team Rankings!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}
			table, th, td {
				border: 1px solid black;
				padding: 5px;
			}
			th {
				font-weight: bold;
			}
		</style>
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
									<a href="MakeTeamPage.php">Add Players</a>
									<a href="CurrTeamRanks.php" class="current-page-item">Current Team Rankings</a>
									<a href="MatchSchedulePage.php">Match Schedule</a>
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
								<table>
									<?php
										$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
										if($sql->connect_errno)
											die("Connection to MySQL database failed: " . $sql->connect_error);
									
										$query = "SELECT Fname, Lname, College, Position, TotalPoints, TotalAssists, GamesPlayed, TeamName FROM Player, Team, PlayerStats WHERE PlayerStats.PlayerID = Player.PlayerID AND Team.TeamNo = Player.TeamNo AND Team.TeamName LIKE '%".$_GET['submit']."%'";
										?>
										<tr>
											<th>Name</th>
											<th>College</th>
											<th>Position</th>
											<th>Total Points</th>
											<th>Total Assists</th>
											<th>Games Played</th>
										</tr>

										<?php
										$result = $sql->query($query);
										if ($result->num_rows > 0){
											while($row = $result->fetch_assoc()){
										?>
											<tr>
												<td><?php echo $row['Fname'] . ' ' . $row['Lname']; ?></td>
												<td><?php echo $row['College'];?></td>
												<td><?php echo $row['Position'];?></td>
												<td><?php echo $row['TotalPoints'];?></td>
												<td><?php echo $row['TotalAssists'];?></td>
												<td><?php echo $row['GamesPlayed'];?></td>
											</tr>	
										<?php
											}
										}
									?>
								</table>
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
