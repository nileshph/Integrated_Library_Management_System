<?php
include 'logincheck.php';
include 'admin_check.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	
	$user_name = clean_input ( $_GET ["username"] );
	$role = clean_input ( $_GET ["role"] );
	
	$sql = "update person set role = '" . $role . "', approved = 1 where username = '" . $user_name . "'";
	if ($conn->query ( $sql ) === TRUE)
		echo "User Role update Successful";
	else {
		echo "Error in user role update";
		return;
	}
	include 'close_db_con.php';
}
?>