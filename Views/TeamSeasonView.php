<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Views</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="/assets/css/main.css" />
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
								<h1><img src="/images/BBLogo-4.gif" style="float:left;width:70px;height:70px;" href="index.html" class="current-page-item" id="logo"><a href="index.html" class="current-page-item" id="logo">League-O-Matic 3000</a></h1>
								<nav id="nav">
									<a href="/IntroPage.html" class="current-page-item">Views</a>
									<a href="/MakeTeamPage.php">Add Players</a>
									<a href="/CurrTeamRanks.php">Current Team Rankings</a>
									<a href="/MatchSchedulePage.php">Match Schedule</a>
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
						<?php
							$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
							if($sql->connect_errno)
								die("Connection to MySQL database failed: " . $sql->connect_error);

							$query = "SELECT * FROM TeamSeason";
						?>

							<section class="left-content">
							<h1>Season:</h1>
								<table>
									<tr>
										<th>Game Time</th>
										<th>Home Team</th>
										<th>Visiting Team</th>
										<th>Arena</th>
									</tr>
									<?php
										$result = $sql->query($query);
										if ($result->num_rows > 0){
											while($row = $result->fetch_assoc()){
										?>
										<tr>
											<td><?php echo $row['Game Time']?></td>
											<td><?php echo $row['Home Team'];?></td>
											<td><?php echo $row['Visiting Team'];?></td>
											<td><?php echo $row['Arena'];?></td>
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
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/skel.min.js"></script>
			<script src="/assets/js/skel-viewport.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="/assets/js/main.js"></script>

	</body>
</html>
