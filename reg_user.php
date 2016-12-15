<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	
	$card_number = clean_input ( $_POST ["card_number"] );
	$first_name = clean_input ( $_POST ["fname"] );
	$middle_name = clean_input ( $_POST ["mname"] );
	$last_name = clean_input ( $_POST ["lname"] );
	$dob = clean_input ( $_POST ["dob"] );
	$role = clean_input ( $_POST ["role"] );
	$user_group = clean_input ( $_POST ["user_group"] );
	$email_id = clean_input ( $_POST ["email"] );
	$phone_number = clean_input ( $_POST ["phone"] );
	//$updated_by = $_SESSION ["username"];
	$updated_date = "'" . date ( "Y-m-d" ) . "'";
	$password = password_hash ( clean_input ( $_POST ["pass"] ), PASSWORD_DEFAULT );
	$username = clean_input ( $_POST ["username"] );
	// insert new user
	$sql = "insert into person (first_name,middle_name,last_name,dob,user_group,email_id,phone_number,updated_date,password,username)
			VALUES ('" . $first_name . "','" . $middle_name . "','" . $last_name . "','" . $dob . "','" . $user_group . "','" . $email_id . "','" . $phone_number . "'," . $updated_date . ",'" . $password . "','" . $username . "');";
	if ($conn->query ( $sql ) === TRUE){
		$sql = "select card_number from person where username = '" . $username . "'";
		$resultset = $conn->query ( $sql );
		$row=$resultset->fetch_assoc();
		$str='Username: '.$username.'\n Card Number: '.$row["card_number"].'\n Please wait for 24 hours before logging in.';
		echo '<script type="text/javascript">';
		echo "alert('$str');";
		echo 'window.location.href = "index.php";';
		echo '</script>';
		exit ();
	}
	else
	{
		echo '<script type="text/javascript">';
		echo "alert('cannot register');";
		echo 'window.location.href = "login.html";';
		echo '</script>';
		exit ();
	}			// get new card number for registered user
	
	
}
?>