<?php

// CONNECT TO THE DATABASE
$DB_NAME = 'opsworks_book_demo';
$DB_HOST = '172.31.40.110'; // CHANGE THIS TO YOUR OPSWORKS MYSQL SERVER PRIVATE IP ADDRESS
$DB_USER = 'root'; // KEEP THIS IN PLACE AS PER CHAPTER 4 
$DB_PASS = 'mysql1729'; // KEEP THIS IN PLACE AS PER CHAPTER 4
					
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
				
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
