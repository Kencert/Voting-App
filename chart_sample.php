<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Voting Results Chart</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class = "main-header">

<label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<div class="menu" style="float: left; margin-left: 100px;">
		<ul id="menu">
		<li>
			<a href="#">Home ￬</a>
			<ul class="hidden"><!-- Hidden navigational menu that drop on mouse hover. -->
				<li><a href="index.php">Home</a></li>
				<li><a href="candidatesreg.php">Reg. Candidates</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Registration ￬</a>
			<ul class="hidden"><!-- Hidden navigational menu that drop on mouse hover. -->
				<li><a href="cregistration.php">Candidates</a></li>
				<li><a href="registration.php">Students</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Login ￬</a>
			<ul class="hidden"><!-- Hidden navigational menu that drop on mouse hover. -->
				<li><a href="login.php">Students </a></li>
				<li><a href="clogin.php">Candidates </a></li>
			
			</ul>
		</li>
		<li><a href="vote.php">Vote</a></li>
		<li><a href="results.php">Results</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	</div>
</header>

  <div id="chart-container" style="margin-top: 150px;" style="margin-bottom: 50px;" >Presidential Chart will render here</div>
  <div id="chart-container2">Vice President Chart will render here</div>
  <div id="chart-container3">Secretary General will render here</div>
  <div id="chart-container4">Deputy Secretary General will render here</div>
  <div id="chart-container5">Finance Secretary will render here</div>
  <div id="chart-container6">Academic Secretary will render here</div>
  <div id="chart-container7">Gender and social welfare will render here</div>
  <div id="chart-container8">Special Needs Secretary will render here</div>
  <div id="chart-container9">Organising Secretary will render here</div>
  <div id="chart-container0">Deputy Organising Secretary will render here</div>
  <div id="chart-container1">Hall Representative will render here</div>
  <div id="chart-container11">Non Residents Male will render here</div>
  <div id="chart-container12">Non Residents Female will render here</div>
  <div id="chart-container13">School Representative will render here</div>
  <div id="chart-container14">Games and Sports Male will render here</div>
  <div id="chart-container15">Games and Sports female will render here</div>
  <script src="js/jquery-2.1.4.js"></script>
  <script src="js/fusioncharts.js"></script>
  <script src="js/fusioncharts.charts.js"></script>
  <script src="js/themes/fusioncharts.theme.carbon.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
