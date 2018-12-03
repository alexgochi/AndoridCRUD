<?php

include 'dbconfig.php';

 //creating a new connection object using mysqli 
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 
if($_SERVER['REQUEST_METHOD']=='POST'){
	deleteSeminar();
}

function deleteSeminar() {
	 global $conn;
	
	 $id = $_POST['id'];
	
	 $query = " DELETE FROM seminar WHERE id='$id';";
	
	 mysqli_query($conn, $query) or die (mysql_error($conn));
	 mysqli_close($conn);
}

?>