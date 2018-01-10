<!-- Copyright 2017 Kenedy Cheruiyot, i17/pu/0165/13. All rights reserved. -->
 <?php
 # Include the connection file in folder includes
 include 'includes/connection.php';
 #starting a session
 session_start();
 #if submit is pressed data is sent to the database
 if(isset($_POST['submit']))
 {
 	$Sesh= $_SESSION['username'] ;
	 $President = $_POST['president'];
	 $Vicepresident = $_POST['vicepresident'];
	 $Secgen = $_POST['secgen'];
	 $Depsecgen = $_POST['depsecgen'];
	 $Financesec = $_POST['financesec'];
	 $Academicsec = $_POST['academicsec'];
	 $Gender = $_POST['gender'];
	 $Schoolrep = $_POST['schoolrep'];
	 $Hostel = $_POST['hostel'];
	 $Specialneed = $_POST['Specialneed'];
	 $Organizing = $_POST['organising'];
	 $Deporganising = $_POST['deporganising'];
	 $Nonresidentm = $_POST['nonresidentm'];
	 $Nonresidentf =$_POST['nonresidentf'];
	 $Gamesm =$_POST['gamesmale'];
	 $Gamesf =$_POST['gamesfemale'];
	 $queryvalidate = "select * from addstud where Firstname = '$Sesh' AND Voted = 'Yes' ";
   	$result = mysqli_query($conn, $queryvalidate);
   	#if the student has voted, an alert is displayed and prevented from 
   	if (mysqli_num_rows($result)>0){
		echo "<script>alert ('You Have Voted! ') </script>";
		echo"<script>window.open('results.php','_self')</script>";
		}
		#if the user has not voted the data is sent to the database	
		else{
	 $query = "insert into castvote(President, Vicepresident, Secgen, Depsecgen, Financesec, Academicsec, Gender, Schoolrep, Hostelrep, Specialneeds, Organisingsec, Deputyorganising, Nonresidentmale, Nonresidentfemale, Gamesandsportsmale, Gamesandsportsfemale) values ('$President','$Vicepresident','$Secgen','$Depsecgen','$Financesec','$Academicsec', '$Gender', '$Schoolrep', '$Hostel', '$Specialneed', '$Organizing', '$Deporganising', '$Nonresidentm', '$Nonresidentf', '$Gamesm', '$Gamesf')";

	 if (mysqli_query($conn,$query))
	 {
	 	#The column named Voted is set to yes once the user has voted
	 	$que = "UPDATE addstud SET Voted = 'Yes' WHERE Firstname = '$Sesh'";
	     mysqli_query($conn,$que);
	    #updating parallel tables each of a specific post being voted for
	 	$query_2 = "insert into president(Name) values ('$President')";
	 	mysqli_query($conn,$query_2);
	 	$query_3 = "insert into vicepresident(Name) values ('$Vicepresident')";
	 	mysqli_query($conn,$query_3);
	 	$query_4 = "insert into secretarygeneral(Name) values ('$Secgen')";
	 	mysqli_query($conn,$query_4);
	 	$query_5 = "insert into depsecretarygeneral(Name) values ('$Depsecgen')";
	 	mysqli_query($conn,$query_5);
	 	$query_6 = "insert into financesecretary(Name) values ('$Financesec')";
	 	mysqli_query($conn,$query_6);
	 	$query_7 = "insert into academicsecretary(Name) values ('$Academicsec')";
	 	mysqli_query($conn,$query_7);
	 	$query_8 = "insert into gender(Name) values ('$Gender')";
	 	mysqli_query($conn,$query_8);
	 	$query_9 = "insert into schoolrep(Name) values ('$Schoolrep')";
	 	mysqli_query($conn,$query_9);
	 	$query_0 = "insert into hostelrep(Name) values ('$Hostel')";
	 	mysqli_query($conn,$query_0);
	 	$query_1 = "insert into specialneed(Name) values ('$Specialneed')";
	 	mysqli_query($conn,$query_1);
	 	$query_11 = "insert into organising(Name) values ('$Organizing')";
	 	mysqli_query($conn,$query_11);
	 	$query_12 = "insert into deporganising(Name) values ('$Deporganising')";
	 	mysqli_query($conn,$query_12);
	 	$query_13 = "insert into nonresidentm(Name) values ('$Nonresidentm')";
	 	mysqli_query($conn,$query_13);
	 	$query_14 = "insert into nonresidentf(Name) values ('$Nonresidentf')";
	 	mysqli_query($conn,$query_14);
	 	$query_15 = "insert into gamesmale(Name) values ('$Gamesm')";
	 	mysqli_query($conn,$query_15);
	 	$query_16 = "insert into gamesfemale(Name) values ('$Gamesf')";
	 	mysqli_query($conn,$query_16);
	 	#once voted index file is displayed		
		echo"<script>window.open('index.php','_self')</script>";	 
	 }
	 
 }
		
}
 ?>
 
 