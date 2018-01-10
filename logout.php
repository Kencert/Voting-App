<?php
session_start();
echo "<script>alert ('You are now logged out !')</script>";
 // Delete the session variable:
 unset($_SESSION['username']);
// Reset the session array:
 
echo"<script>window.open('index.php','_self')</script>";
		
?>
