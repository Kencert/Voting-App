<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
<!-- PHP function that initializes connection. -->
<?php
 include 'includes/connection.php';
 session_start();
 if (!isset($_SESSION['username'])){
 	echo "<script>alert('Please login first!')</script>";
 	echo"<script>window.open('login.php','_self')</script>";
 }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Candidates Registered</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- Static top menu header with menu links and navigational menus. -->
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

<div class="container1" >

	<table width="100%" border="1">
    		<tr>
    			<th colspan="4"><b><b>Welcome: <?php echo $_SESSION['username']; ?>!<br></b>Candidates Registered:</b></th>
    		</tr>
    		<tr>
    			<td><b><i>Candidates First Name</i></b></td>
    			<td><b><i>Candidates Second Name</i></b></td>
    			<td><b><i>Post Vying</i></b></td>
    			<td><b><i>School</i></b></td>
   		    </tr>
   		    <!-- PHP function that gets values from database and display on the table cell. -->
    		<?php
				$sql="SELECT * FROM addcandidate";
				$result_set=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($result_set))
				{
				?>
        	<tr>
        		<td><b><?php echo $row['firstname'] ?></b></td>
        		<td><b><?php echo $row['othernames'] ?></b></td>
        		<td><b><?php echo $row['postvying'] ?></b></td>
        		<td><b><?php echo $row['school'] ?></b></td>
         	</tr>
        	<?php
			}
			?>
    </table>
    <div class= "footer">
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com <br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
</div>
</body>
</html>