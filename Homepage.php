<--PHO
<!-- This is a test. -->
<table><tr><td width="85%">
<img src='number1.jpg' ALIGN='Centre'/>

	<body bgcolor="#0000E6">

	<hr color='red' size='20'>

		<?php


							   
		$dbLocalhost = mysqli_connect("localhost:3306","root","","project")
			or die("Could not connect: " . mysqli_connect_error());

		$dbRecords = mysqli_query($dbLocalhost, "SELECT * FROM teams")
			or die("Problem reading table: " . mysqli_error());
				
		$execute = mysqli_query($dbLocalhost);


		$dbLocalHost-close();
		?>

	<body> 



</body>
