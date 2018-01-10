<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'lockedout';
$db = 'voting_app';
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db) or die('Could not connect to Database'. mysqli_error());


?>