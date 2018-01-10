<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Home </title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<script async="" src="jquery.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<header class = "main-header">


    <label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<div class="menu">
		<ul id="menu"  >
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
		  <li><a href="results.php">Results</a></li>
	    </ul> 
</div>
</header>

<div class="container1" >
	<table width="100%" border="1" margin="1">
        <tr>
    			<th colspan="4"><b>Candidates Uploads.</b></th>
    	</tr>
    	<tr>
    			<td><b><i>Candidates Name</i></b></td>
    			<td><b><i>Details</i></b></td>
    			<td><b><i>View</i></b></td>
	
    	</tr>
    			<!-- PHP function that gets values from database and display on the table cell. -->
    			<?php
					include 'includes/connection.php';
					$sql="SELECT * FROM tbl_uploads";
					$result_set=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($result_set))
					{
						?>
        				<tr>
        					<td><b><?php echo $row['candidate'] ?></b></td>
        					<td><b><?php echo $row['Details'] ?></b></td>
        					<td style="text-align: center;" style="width: 300px;">
        					<img src="uploads/<?php echo $row['file']; ?>" style="height:100px;">
        					<a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        				</tr>
       			 <?php
					}
						?>
    </table>
    
    		<div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com<br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
 	
 </div> 

 </body>
 
 </html>

 