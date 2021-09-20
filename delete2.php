<?php
	
	$url='localhost';
	$username='root';
	$password='';
	$conn=mysqli_connect($url,$username,$password,"web_engineeringrh");
	if(!$conn){
	 die('Could not Connect My Sql:' .mysql_error());
	}



	$sql = "DELETE FROM photos WHERE id='" . $_GET["id"] . "'";
	if (mysqli_query($conn, $sql)) {
		header("Location: allphotos.php");
	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>