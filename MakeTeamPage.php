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
	<?php
	if(isset($_POST['submit'])){
		if(!isset($_POST['confirm'])){
			$sql = new mysqli("localhost", "root", "x9fN#DXy", "LeagueData");
			//$sql = new mysqli("localhost", "root", "", "LeagueData");
			if($sql->connect_errno)
				die("Connection to MySQL database failed: " . $sql->connect_error);
			$query = "INSERT INTO Player(TeamNo, Fname, Lname, College, Position) VALUES(10, '".str_replace("'", "\\'", $_POST['Fname'])."', '".str_replace("'", "\\'", $_POST['Lname'])."', '".str_replace("'", "\\'", $_POST['College'])."', '".str_replace("'", "\\'", $_POST['Position'])."')";
			$a = mysqli_query($sql, $query);
			?>
			<form id="conForm" action="MakeTeamPage.php" method="post">
			<?php
				echo '<input type="hidden" name="confirm" value="'.$a.'">';
				echo '<input type="hidden" name="query" value="'.$query.'">';
			?>
			</form>
			<script type="text/javascript">
				document.getElementById('conForm').submit();
			</script><?php
		}
	}
		?>
		<div id="page-wrapper">
			<div id="header-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<header id="header">
								<h1><img src="images/BBLogo-4.gif" style="float:left;width:70px;height:70px;" href="index.html" class="current-page-item" id="logo"><a href="index.html" class="current-page-item" id="logo">League-O-Matic 3000</a></h1>
								<nav id="nav">
									<a href="IntroPage.html">Views</a>
									<a href="MakeTeamPage.php" class="current-page-item">Add Players</a>
									<a href="CurrTeamRanks.php">Current Team Rankings</a>
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
								<form action="MakeTeamPage.php" method="POST">
									<p><label for='Fname'>First Name: </label> <input type='text' name='Fname' id="fname"/></p>
									<p><label for='Lname'>Last Name: </label> <input type='text' name='Lname' id="lname"/></p>
									<p><label for='College'>College: </label> <input type='text' name='College' id="college"/></p>
									<p><label for='Position'>Position: </label> 
									<select name='Position'>
										<option value='Point Guard'>Point Guard</option>
										<option value='Shooting Guard'>Shooting Guard</option>
										<option value='Small Forward'>Small Forward</option>
										<option value='Power Forward'>Power Forward</option>
										<option value='Centre'>Centre</option>
									</select>
									</p>
									<p><input type='submit' name='submit' value='Insert Player'></p>
								</form>
								<form action="update.php" method="POST">
									<p><input type='submit' name='submit' value='Randomize Teams 1-9'></p>
								</form>
							</section>
							<section class="right-content">
								<?php
									if(isset($_POST['confirm'])){
										if($_POST['confirm'] === '1')
											echo "<p><strong>Player added to Team 10 successfully.</strong></p>";
										if($_POST['confirm'] === '2')
											echo "<p><strong>Team 1-9 players randomized.</strong></p>";
										else
											echo "<p><strong>Insert new player failed.<br>Query: ".$_POST['query']."</strong></p>";
									}
								?>
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
