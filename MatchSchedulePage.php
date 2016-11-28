<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Three Column - Minimaxing by HTML5 UP</title>
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
								<h1><img src="images/BBLogo-4.gif" style="float:left;width:70px;height:70px;" href="index.html" class="current-page-item" id="logo"><a href="index.html" class="current-page-item" id="logo">League-O-Matic 3000</a></h1>
								<nav id="nav">
									<a href="IntroPage.html">Introduction</a>
									<a href="MakeTeamPage.html">Make A Team</a>
									<a href="CurrTeamRanks.php">Current Team Rankings</a>
									<a href="MatchSchedulePage.php" class="current-page-item">Match Schedule</a>
								</nav>
							</header>


						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="container">
					<div class="row main-row">
						<div class="8u">
							<section>
								<table>
									<?php
											$sql = mysqli_connect("localhost", "root", "x9fN#DXy", "LeagueData");
											//$sql = mysqli_connect("localhost", "root", "", "LeagueData");
											if($sql->connect_errno)
												die("Connection to MySQL database failed: " . $sql->connect_error);  ?>
									<tr>
										<th>Match #</th>
										<th>Game time</th>
										<th>Home team</th>
										<th>Visitor team</th>
										<th>Location</th>
										<th>Winner</th>
									</tr>
									<?php 
										$result = mysqli_query($sql, "Select * from Schedule");
										if(mysqli_num_rows($result) > 0){
											while($row = mysqli_fetch_assoc($result)) :
									?>
										<tr>
											<td><?=$row['MatchNo']?></td>
											<td><?=$row['GameTime']?></td>
											<?php
												$hresult = mysqli_fetch_array(mysqli_query($sql, "Select TeamName, City from Team where TeamNo=" . $row['HomeTeamNo']));
												$vresult = mysqli_fetch_array(mysqli_query($sql, "Select TeamName from Team where TeamNo=" . $row['VisitorTeamNo']));
												$lresult = mysqli_fetch_array(mysqli_query($sql, "Select ArenaName, Address, City from Arena where ArenaNo=" . $row['Arena']));
												$wresult = mysqli_fetch_array(mysqli_query($sql, "Select TeamName from Team where TeamNo=" . $row['WinningTeamNo']));
											?>
											<td><?=$hresult['City']?> <?=$hresult['TeamName']?></td>
											<td><?=$vresult['TeamName']?></td>
											<td><?=$lresult['ArenaName']?>: <?=$lresult['Address']?>, <?=$lresult['City']?></td>
											<td><?=$wresult['TeamName']?></td>
										</tr>
									<?php endwhile; ?>
								</table>
								<?php } mysqli_close($sql); ?>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div id="footer-wrapper">
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
