<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> Student Registration Form </title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Static top menu header with menu links and navigational menus. -->
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
				<li><a href="files.php">Files</a></li>
			</ul>
		</li>
		
	</ul>
	</div>
</header>
<div class="container">

	<form method = 'POST' action = 'registration.php'>

		<table width="100%" border="1">
			<tr>
				<td align ='center' colspan = '6'><h1><b> Student Registration Form</b></h1></td>
			</tr>
 			<tr>
 				<td>First Name:</td>
 				<td><input type='text' name = 'fname' placeholder="e.g. John!" /></td>
 			</tr>
 			<tr>
 				<td>Other Names:</td>
 				<td><input type='text' name = 'oname' placeholder="e.g. Doe!"/></td>
 			</tr>
 			<tr>
 				<td>Admission No.:</td>
 				<td><input type='text' name = 'adm' placeholder="e.g. i17/pu/0165/13!"/></td>
 			</tr>
 			<tr>
 				<td>School:</td>
 				<td>
 				<select name="school">  
  					<option>Pure and Applied Science</option>
            		<option>Education</option>
            		<option>Agriculture Science and Agribusiness</option>
             		<option>Environmental and Earth Studies</option>
             		 <option>Human and Health Science</option>
               		<option>Humanities and Social Sciences</option>
				</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Course:</td>
 				<td>
 				<select name="course">
  					<option>Computer Science</option>
  					<option>Marine Biology and Fisheries</option>
  					<option>Mathematics</option>
  					<option>Physics</option>
  					<option>Botany</option>
           			<option>Industrial Chemistry</option>
            		<option>Applied Biology</option>
             		<option>Zoology</option>
              		<option>Chemistry</option>
               		<option>Bio Chemistry</option>
               		<option>Microbiology</option>
  					<option>Education Arts</option>
  					<option>Education Science</option>
  					<option>Education Special Needs</option>
  					<option>Education E.C.E.</option>
           			<option>Education Agriculture</option>
            		<option>Environmental Science</option>
             		<option>Environmental Planning and Management</option>
              		<option>Environmental Studies (Com Dev)</option>
               		<option>Nursing and public Health</option>
               		<option>Environmental Health</option>
  					<option>Food Nutrition and Dietetics</option>
  					<option>Hospitality and Tourism Management</option>
  					<option>Tourism Management</option>
  					<option>Geography</option>
           			<option>Commerce</option>
            		<option>Animal Production and Health</option>
             		<option>Agriculture Resource management</option>
              		<option>Agribusiness management and Trade</option>
               		<option>Agriculture and Enterprise Development</option>
               		<option>Horticultural science and Management</option>
  					<option>Animal Health management</option>
  					<option>Agriculture and Marketting</option>
  					<option>Horticulture and Marketing</option>
				</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Residence:</td>
 				<td>
 				<select name="residence">
  					<option>In School Hostel</option>
  					<option>Off School Hostel</option>
  					<option>Rental</option>
				</select>
 				</td>
 			</tr>
 			<tr>
 				<td>Gender:</td>
 				<td>
 				<select name="gender">
  				<option>Male</option>
  				<option>Female</option>
  				</select>
 				</td>
 			</tr>
 			<tr>
 				<td>SecurityQn:
 				<select name="securityqn">
  				<option>In what City does your closest sibling live?</option>
  				<option>What is the name of your first companion?</option>
  				<option>What is your favourite place to visit?</option>
  				<option>What is your favourite colour?</option>
  				<option>What are the last four digits of your first mobile phone number?</option>
  				</select>
 				</td>
 				<td><input type='text' name = 'securityans' placeholder="Enter answer!"/></td>
 			</tr>
 			<tr>
 				<td>Create Password:</td>
 				<td><input type='password' name = 'pass1' placeholder="Enter Password!"/></td>
 			</tr>
 			<tr>
 				<td>Confirm Password:</td>
 				<td><input type='password' name = 'pass2' placeholder="Confirm Password!"/></td>
 			</tr>
 				<td align='center' colspan='6'><input type='submit' name = 'submit' value = 'Sign Up' class="btn"/>
  				<p class="login__signup">Already have an account? &nbsp;<a href="login.php">Log in here!</a></p>
  				</td>
 		</table>
 		<div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com </br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
	</form>
</div>
</body>
</html>
 
 <!-- PHP function to send collected data to the database. -->
 <?php
 include 'includes/connection.php';
 if(isset($_POST['submit'])){
	 $Firstname = $_POST['fname'];
	 $Othernames = $_POST['oname'];
	 $Admno = $_POST['adm'];
	 $School = $_POST['school'];
	 $Course = $_POST['course'];
	 $Residence = $_POST['residence'];
	 $Gender = $_POST['gender'];
	 $SecurityQn = $_POST['securityqn'];
	 $Securityans = $_POST['securityans'];
	 $Password1 = $_POST['pass1'];
	 $Password2 = $_POST['pass2'];
	 $query = "insert into addstud(Firstname,Othernames,Admno,school,course,residence,gender,securityqn,securityans,pass1,pass2) values ('$Firstname','$Othernames','$Admno','$School','$Course','$Residence','$Gender','$SecurityQn','$Securityans','$Password1','$Password2')";
	 if (mysqli_query($conn,$query)){
	 	session_start();
        $_SESSION['username'] = $_POST['fname'];
	 			if ($Firstname==''){
				echo "<script>alert('Empty Firstname!')</script>";
				exit();
				}	
				if ($Othernames==''){
				echo "<script>alert('Empty Othernames!')</script>";
				exit();
				}	
				if ($Admno==''){
				echo "<script>alert('Empty Admission No!')</script>";
				exit();
				}	
				if ($School==''){
				echo "<script>alert('Empty School!')</script>";
				exit();
				}	
				if ($Course==''){
				echo "<script>alert('Empty Course')</script>";
				exit();
				}	
				if ($Residence==''){
				echo "<script>alert('Empty Residence!')</script>";
				exit();
				}	
				if ($Gender==''){
				echo "<script>alert('Empty Gender')</script>";
				exit();
				}	
				if ($SecurityQn==''){
				echo "<script>alert('Empty SecurityQn!')</script>";
				exit();
				}	
				if ($Securityans==''){
				echo "<script>alert('Empty Securityans')</script>";
				exit();
				}	
				if ($Password1==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
				}	
				if ($Password2==''){
				echo "<script>alert('Empty Password!')</script>";
				exit();
				}	
			echo"<script>window.open('login.php','_self')</script>";	 
									 }
	 else{
		 echo "<script>alert ('Please recheck details!')</script>";
		 }
 }
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 