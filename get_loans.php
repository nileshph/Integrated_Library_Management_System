<?php
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	include 'logincheck.php';
	$card_number = clean_input ( $_SESSION ["card_number"] );
	$sql = "select order_number,title,loan.item_id,date_out,due_date,date_in,loan.quantity from loan,item
			where card_id = " . $card_number . " and item.item_id = loan.item_id";
	$resultset = $conn->query ( $sql );
	include 'close_db_con.php';
	$recJson = reToJson ( $resultset );
	$json_data = json_encode ( $recJson );
	echo $json_data;

?>