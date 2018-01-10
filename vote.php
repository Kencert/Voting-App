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
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Vote</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="icon" type="image/png" href="voted.jpg" />

	
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('vote_CCRI.jpg')">
	    <a href="index.php" class="made-with-mk">
			<div class="brand">Nav</div>
			<div class="made-with">Click Here to cancel vote</div>
		</a>

	    <!-- container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
			                   <form id = "formpost" role="form" action = "voteold.php"  method = "post">
	                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Vote Here 
		                        	</h3>
									<h5>Select choice of candidates from the list available.</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Top Ranked Student leaders</a></li>
			                            <li><a href="#type" data-toggle="tab">Middle level Student Leaders</a></li>
			                            <li><a href="#facilities" data-toggle="tab">Other Officials</a></li>
			                            <li><a href="#description" data-toggle="tab">Description</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> Let's start with the top officials</h4>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">President</label>
													<select name = "president" class="form-control">
														<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
														<?php
															include 'includes/connection.php';
															$query = "SELECT * FROM addcandidate where postvying = 'President'";
															$result = mysqli_query($conn,$query);
															while ($row = mysqli_fetch_assoc($result))
															{
														echo "<option >" . $row['firstname'] . $row['othernames']."</option>";
															}
																?>
 
														</select>
               
		                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Deputy President</label>
	                                            	<select name = "vicepresident" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
													<?php
													include 'includes/connection.php';
													$query = "SELECT * FROM addcandidate where postvying = 'Deputy President'";
													$result = mysqli_query($conn,$query);
													while ($row = mysqli_fetch_assoc($result))
														{
														echo "<option>" . $row['firstname'] .  $row['othernames']."</option>";
														}
														?>
												</select>
	                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Secretary General</label>
		                                        	<select name = "secgen" class="form-control">
														<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
														<?php
															include 'includes/connection.php';
															$query = "SELECT * FROM addcandidate where postvying = 'Secretary General'";
															$result = mysqli_query($conn,$query);
															while ($row = mysqli_fetch_assoc($result))
															{
														echo "<option >" . $row['firstname'] . $row['othernames']."</option>";
															}
																?>
 
														</select>
               
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Deputy Secretary General</label>
		                                        	<select name = "depsecgen" class="form-control">
														<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
														<?php
															
															$query = "SELECT * FROM addcandidate where postvying = 'Deputy Secretary General'";
															$result = mysqli_query($conn,$query);
															while ($row = mysqli_fetch_assoc($result))
															{
														echo "<option >" . $row['firstname'] . $row['othernames']."</option>";
															}
																?>
 
														</select>
               
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="type">
		                                <h4 class="info-text">Middle Level Student Leaders </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        
		                                        <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Finance Secretary</label>
													<select name = "financesec" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Finance Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Academic Secretary</label>
													<select name = "academicsec" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Academic Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Gender and Social Welfare</label>
													<select name = "gender" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Gender and Social Welfare Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">School Representative</label>
													<select name = "schoolrep" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'School Representative'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Hall Representative</label>
													<select name = "hostel" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Hall Representative'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Special Needs Secretary</label>
													<select name = "Specialneed" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Special Needs Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  
		                                    </div>

		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h4 class="info-text">Other Officials </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        
		                                        <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Organising Secretary</label>
													<select name = "organising" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Organizing Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Deputy Organising Secretary</label>
													<select name = "deporganising" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Deputy Organizing Secretary'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Non Resident Representative Male</label>
													<select name = "nonresidentm" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Non Resident Representative Male'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Non Resident Representative Female</label>
													<select name = "nonresidentf" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Non Resident Representative Female'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Games and Sports Secretary Male</label>
													<select name = "gamesmale" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Games and Sports Secretary Male'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  <div class="col-sm-4">
		                                          <div class="form-group label-floating">
		                                        	<label class="control-label">Games and Sports Secretary Female</label>
													<select name = "gamesfemale" class="form-control">
													<!-- PHP function to come up with a dropdown list of available candidates as an option. -->
 													<?php
 				 									include 'includes/connection.php';
 				 									$query = "SELECT * FROM addcandidate where postvying = 'Games and Sports Secretary Female'";
 				 									$result = mysqli_query($conn,$query);
 				 									while ($row = mysqli_fetch_assoc($result))
 				 										{
	 			 									echo "<option>" . $row['firstname']. $row['othernames']."</option>";
 		           										 }
 														?>
 
														</select>
               
		                                        	</div>
	  
		                                        </div>
		                                  
		                                    </div>

		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                
		                                    <h4 class="info-text"> Confirm Final Step. </h4>

		                                    <div class="col-sm-10">
		                                    
											<p> You can toggle through your choices by clicking the <b>previous</b> or <b> next</b> buttons</p>
		                                    <div class="checkbox">
											<label>
											<input type="checkbox" name="optionsCheckboxes" ><strong>
											Please confirm that the choices made previously are final.</strong>
											</label> 
											</div>
											</div>
		                                     </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
	                                    <input type='submit' name = 'submit' value = 'Cast Vote' class="btn btn-finish btn-fill btn-primary btn-wd"/>
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	           
 					Pwani University ICT Department © 2017
 					Cheruiyotkenedy@gmail.com </br>
 					<a href ="http://kentprog.com/"> Thanks to Kenedy Cheruiyot </a>
 			</div>
	    </div>
	

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<script src="assets/js/jquery.validate.min.js"></script>

</html>
