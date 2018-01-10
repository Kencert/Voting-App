<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Candidates Registration Form </title>
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
				<li><a href="login.php">Students</a></li>
				<li><a href="clogin.php">Candidates</a></li>
			
			  </ul>
		    </li>
		   
	    </ul>
        </div>
</header>
<div class="container">

<form method = 'POST' action = 'cregistration.php' enctype="multipart/form-data">
  <table width="100%" border="1">

    <tr>
        <td align ='center' colspan = '8'><h1><b> Candidates Registration Form</b></h1></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><input type='text' name = 'fname' placeholder="e.g. John!"/></td>
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
        <td>Post Vying:</td>
        <td>
        <select name="post">
        //Dropdown list of posts to vie for
            <option>President</option>
            <option>Deputy President</option>
            <option>Secretary General</option>
            <option>Deputy Secretary General</option>
            <option>Organizing Secretary</option>
            <option>Deputy Organizing Secretary</option>
            <option>Finance Secretary</option>
            <option>Gender and Social Welfare Secretary</option>
            <option>Academic Secretary</option>
            <option>Special Needs Secretary</option>
            <option>Hall Representative</option>
            <option>Non Resident Representative Male</option>
            <option>Non Resident Representative Female</option>
            <option>School Representative</option>
            <option>Games and Sports Secretary Male</option>
            <option>Games and Sports Secretary Female</option>
          
        </select>
        </td>
    </tr>
    <tr>
        <td>Year of Study:</td>
        <td>
        <select name="year">
        //Dropdown list of academic year
            <option>One 1</option>
            <option>Two 2</option>
            <option>Three 3</option>
            <option>Four 4</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>School:</td>
        <td>
        <select name="school">
        //Dropdown list of schools
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
        <td>Create Password:</td>
        <td><input type='password' name = 'pass1' placeholder="Enter Password!"/></td>
    </tr>
    <tr>
        <td>Confirm Password:</td>
        <td><input type='password' name = 'pass2' placeholder="Confirm Password!"/></td>
    </tr>
        <td align='center' colspan='6'><input type='submit' name = 'submit' value = 'Submit Details' class="btn"/>
         <p class="login__signup">Already have an account? &nbsp;<a href="clogin.php">Log in here!</a></p>
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
 <!-- PHP function to send the collected information to the database. -->
<?php
 include 'includes/connection.php';
 if(isset($_POST['submit'])){
	 $Firstname = $_POST['fname'];
	 $Othernames = $_POST['oname'];
	 $Admno = $_POST['adm'];
	 $Post = $_POST['post'];
	 $Year = $_POST['year'];
	 $School = $_POST['school'];
	 $Password1 = $_POST['pass1'];
	 $Password2 = $_POST['pass2'];
	 
	 $query = "insert into addcandidate(firstname,othernames,admno,postvying,yearofstudy,school,password1,password2) values ('$Firstname','$Othernames','$Admno','$Post','$Year','$School','$Password1','$Password2')";
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
                if ($Post==''){
                echo "<script>alert('Empty Post Vying')</script>";
                exit();
                }   
                if ($Year==''){
                echo "<script>alert('Empty Year!')</script>";
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
	echo"<script>window.open('fileupload.php','_self')</script>";	 
	 }
	 
 }
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 