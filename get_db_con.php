<?php
	$conn = new mysqli ( "104.155.137.35", "root", "wplproject", "libray" );
	
	// check for connection
	if ($conn->connect_error) {
		die ( "Connection failed: " . $conn->connect_error );
	}
?>
