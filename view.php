 <!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
 <!-- connection initializing. -->
<?php
 include 'includes/connection.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Candidates Files </title>
<link rel="stylesheet" href="style.css" type="text/css" />
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
			
			</ul>
		</li>
		<li><a href="vote.php">Vote</a></li>
		<li><a href="results.php">Results</a></li>
		<li><a href="files.php">Files</a></li>
		<li><a href="logout.php">Logout</a></li>
		
	</ul>
	</div>
</header>
<div class="container1" >

	<table width="100%" border="1">
    <tr>
    <th colspan="4"><b>Uploads.</b><label><a href="fileupload.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td><i>File Name</i></td>
    <td><i>File Type</i></td>
    <td><i>File Size(KB)</i></td>
    <td><i>View<i></td>
	
    </tr>
    <!-- PHP function that gets values from database and display on the table cell. -->
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
	}
	?>
    </table>
    
</div>
</body>
</html>