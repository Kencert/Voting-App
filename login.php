<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Log In </title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Static top menu header with menu links and navigational menus. -->
<header class = "main-header">


    <label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<div class="menu">
		<ul id="menu"  >
		  
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
		  <li><a href="files.php">Files</a></li>
		  <li><a href="results.php">Results</a></li>
	    </ul> 
</div>
</header>

<div class="container"  >
<!-- Form Holding input controls. -->
<form id="form" method = 'POST' action = 'login.php'>
<table width="100%" border="1" align="center">
		<tr>
			<td align ='center' colspan = '6' ><h1><b>Students Log In</b></h1></td>
		</tr>
 		<tr>
 			<td>First Name:</td>
 			<td><input type='text'  name = 'fname' placeholder="Enter First Name!" /></td>
 		</tr>
 		<tr>
 			<td>Input Password:</td>
 			<td><input type='password'  name = 'pass1' placeholder="Enter Password!" /></td>
 		</tr>
 			<td align='center' colspan='6'><input type='submit'  name = 'submit' value = 'Log In' class="btn"/>
         	<p class="login__signup">Don't have an account? &nbsp;<a href="registration.php">Sign up</a></p>
			</td>
  
</table>    
</form>
   <div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com </br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
</div>
</body>
</html>
		<!-- PHP function validating the user information from the ones in the database. -->

 		<?php
 		session_start();
		include 'includes/connection.php';
		if(isset($_POST['submit'])){

			$Firstname = $_POST ['fname'];
			$Password = $_POST ['pass1'];
			$query = "select * from addstud where Firstname = '$Firstname' AND pass1 = '$Password' ";
			$result = mysqli_query($conn, $query);
				if ($Firstname==''){
				echo "<script>alert('Empty Username')</script>";
				exit();
				}	
				if ($Password==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
				}	
		if (mysqli_num_rows($result)>0){
			$_SESSION['username'] = $_POST['fname'];
			echo "<script>alert ('Welcome $Firstname !')</script>";
			echo"<script>window.open('files.php','_self')</script>";
		}
		else 
		{
		echo "<script>alert ('Username or Password is invalid! ')</script>";
		}
		}
		?>