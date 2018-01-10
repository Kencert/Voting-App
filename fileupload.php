<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!-- PHP function that initializes connection. -->
<?php
 include 'includes/connection.php';
// Inialize session
session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])){
 	echo "<script>alert('Please login first!')</script>";
 	echo"<script>window.open('clogin.php','_self')</script>";
 }

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Candidates Files Uploading</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<!-- Static header which contains navigational menus and menu links. -->
<header class = "main-header">

<label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<div class="menu">
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
<body>
<div class="container">
    <!-- form action refering to upload.php that has functions for file uploading on pressing submit. -->
	<form action="upload.php" method="post" enctype="multipart/form-data">
	<!-- Allows a user to navigate though their documents to upload files. -->
	<b>Welcome Candidate.</b><br>
	<tr>
        <td>Details:</td>
        <td><input type='text' name = 'details' placeholder="enter details!"/></td>
    </tr><br>
    <tr>
        <td>Candidates Name:</td>
        <td><input type='text' name = 'candidate' placeholder="enter full name!"/></td>
    </tr><br>
	     <input type="file" name="file"  />
	     
	     <button type="submit" name="btn-upload" class="btn">upload</button>
	</form>
	<label><a href="files.php" class="btn">View files Uploaded.</a></label>
    <br /><br />
    <!-- PHP function that gives feedback on upload status. -->
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully!  <a href="view.php">click here to view files.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Try to upload any files for the Voters to see:(acceptable formats: PDF, DOC, EXE, VIDEO, MP3, MP4)</label>
        <?php
	}
	?>
	<div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com </br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
</div>

</body>
</html>