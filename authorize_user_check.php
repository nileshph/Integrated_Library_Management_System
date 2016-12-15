<?php 
include "admin_check.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
	include 'get_db_con.php';
	include 'clean_input.php';	
	$card_number = clean_input ( $_GET ["card_number"] );
	$role= clean_input($_POST["role"]);
	$updated_by = $_SESSION ["username"];
	$updated_date = date ( "Y-m-d" );
	$sql="update person set role='".$role."',updated_by='".$updated_by."', updated_date='".$updated_date."', approved=1 where card_number=".$card_number;
	if ($conn->query($sql) === TRUE){
		echo '<script type="text/javascript">';
		echo 'alert("Authorized.");';
		echo 'window.location.href = "authorize_user.php";';
		echo '</script>';
	}
	else
	{echo '<script type="text/javascript">';
	echo 'alert("Unable to Authorize");';
	echo 'window.location.href = "authorize_user.php";';
	echo '</script>';}
	include 'close_db_con.php';
}

?>