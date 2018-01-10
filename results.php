 <!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
 <?php
 include 'includes/connection.php';
 session_start();
 // Check, if username session is NOT set then this page will jump to login page
  if (!isset($_SESSION['username'])){
 	echo "<script>alert('Please login first!')</script>";
 	echo"<script>window.open('login.php','_self')</script>";
 }
?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Election Results </title>
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Static top menu header with menu links and navigational menus. -->
<header class = "main-header">

<label for="show-menu" class="show-menu">Show Menu</label>
	<input type="checkbox" id="show-menu" role="button">
	<div class="menu" style="float: left; margin-left: 50px;">
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
		<li><a href="files.php">Files</a></li>
		<li><a href="results.php">Results</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	</div>
</header>

<div class="container1" >

	<table width="100%" border="1">
    		<tr>
    			<th colspan="4"><b><b>Welcome: <?php echo $_SESSION['username']; ?>!</b><br>Results Here.</b></th>
          <button onClick="window.print()">Click to Print this Page</button>

    		</tr>
    		<tr>
    			<td><i>Candidates Name</i></td>
    			<td><i>Votes</i></td>
    			<a href="chart_sample.php">Chart Representation here</a>
    		</tr>
    		<!-- PHP function that counts total number of votes a particular presidential candidate attained from database and displays on table cell. -->
    		<?php
    		include 'includes/connection.php';
    		echo "<th> President: ";
    		echo "</th>";  
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM president GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td> " . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <!-- PHP function that counts total number of votes a particular vice presidential candidate attained from database and displays on table cell. -->	
    		<?php
    		include 'includes/connection.php';
    		echo "<th> Vice President: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM vicepresident GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td> " . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <!-- PHP function that counts total number of votes a particular secretary candidate attained from database and displays on table cell. -->			
 			<?php
    		include 'includes/connection.php';
    		echo "<th> Secretary General: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM secretarygeneral GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <!-- PHP function that counts total number of votes a particular deputy secretary general candidate attained from database and displays on table cell. -->	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Dep Secretary General: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM depsecretarygeneral GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td> " . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <!-- PHP function that counts total number of votes a particular finance secretary candidate attained from database and displays on table cell. -->	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Finance Secretary: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM financesecretary GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <!-- PHP function that counts total number of votes a particular academic secretary candidate attained from database and displays on table cell. -->
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Academic Secretary: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM academicsecretary GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <!-- PHP function that counts total number of votes a particular gender and social welfare candidate attained from database and displays on table cell. -->
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Gender and Social Welfare: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM gender GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <!-- PHP function that counts total number of votes a particular schoolrepresentative candidate attained from database and displays on table cell. -->
   			 <?php
    		include 'includes/connection.php';
    		echo "<th>School representative: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM schoolrep GROUP BY Name ORDER BY  COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <!-- PHP function that counts total number of votes a particular hostel representative candidate attained from database and displays on table cell. -->	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Hall representative: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM hostelrep GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Special Needs Secretary: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM specialneed GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Organising Secretary: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM organising GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <?php
    		include 'includes/connection.php';
    		echo "<th>Deputy organising Secretary: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Deputyorganising, COUNT(*) FROM castvote GROUP BY Deputyorganising ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Deputyorganising'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>		
   			 <?php
    		include 'includes/connection.php';
    		echo "<th>Non Residents Male: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM nonresidentm GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Non Residents Female: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM nonresidentf GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Games and Societies Male: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM gamesmale GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
   			 <?php
    		include 'includes/connection.php';
    		echo "<th> Games and Societies Female: ";
    		echo "</th>"; 
    		foreach($conn -> query('SELECT Name, COUNT(*) FROM gamesfemale GROUP BY Name ORDER BY COUNT(*)') as $row) 
    			{  
				echo "<tr>";  
				echo "<td>" . $row['Name'] . "</td>";  
				echo "<td>" . $row['COUNT(*)'] . "</td>";  
				echo "</tr>";   
				}  
   			 ?>	
    </table>
    <div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com </br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
</div> 
 </body>
 
 </html>







 