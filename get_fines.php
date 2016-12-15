<?php
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	include 'logincheck.php';
	
	$card_number = clean_input ( $_SESSION ["card_number"] );
	$sql = "select f.order_number,f.amount,f.payment_status from loan l, fine f 
			where l.card_id =" . $card_number . " and f.order_number = l.order_number";
	$resultset = $conn->query ( $sql );
	include 'close_db_con.php';
	$recJson = reToJson ( $resultset );
	$json_data = json_encode ( $recJson );
	echo $json_data;

?>