<!DOCTYPE html>
<html>
<head>
	<title>HNG INTERNSHIP</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.bgn{
			position: absolute;
			width: 100%;
			height: 100%;
			background: url(Rick_and_Morty_characters.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.timec{
			margin-top: 250px;
			font-style: normal;
			font-weight: normal;
			line-height: normal;
			font-size: 100px;

			color: #000000;
		}
	</style>
</head>
<body class="bgn">
	<center>
	<?php
		date_default_timezone_set('Africa/Lagos');
		echo "<h1 class='timec'>Time is ".date("h:ia")."</h1>";
	?>
	</center>
</body>
</html>