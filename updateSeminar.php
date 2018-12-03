<?php

include 'dbconfig.php';

//creating a new connection object using mysqli 
 $conn = new mysqli($servername, $username, $password, $dbname);
 

if($_SERVER['REQUEST_METHOD']=='POST'){
	updateSeminar();
 }
 
 function updateSeminar() {
	 global $conn;
	 
	 $id = $_POST['idEdited'];
	 $name = $_POST['nameEdited'];
	 $date = $_POST['dateEdited'];
	 $description = $_POST['descriptionEdited'];
	 
	 $query = " UPDATE seminar SET name='$name', date='$date', description='$description' WHERE id = $id;";
	 
	 mysqli_query($conn, $query) or die (mysql_error($conn));
	 mysqli_close($conn);
 }

?>