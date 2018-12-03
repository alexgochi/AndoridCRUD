<?php

include 'dbconfig.php';

 //creating a new connection object using mysqli 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 if($_SERVER["REQUEST_METHOD"]=="POST") {
	 createSeminar();
 }
 
 function createSeminar() {
	global $conn;
	
	$name = $_POST["name"];
	$date = $_POST["date"];
	$description = $_POST["description"];
	
	$query = " INSERT INTO seminar(name, date, description) VALUES ('$name', '$date', '$description');";
	
	mysqli_query($conn, $query) or die (mysql_error($conn));
	mysqli_close($conn);
 }
 
?>