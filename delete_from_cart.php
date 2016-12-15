<?php
include 'logincheck.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$item_id = clean_input ( $_GET ["item_id"] );
	$card_id = $_SESSION ["card_number"];

	$sql = "delete from cart where card_id =" . $card_id . " and item_id=" . $item_id;

	if($conn->query ( $sql )){
		echo "Item deleted from cart";
	}
	else{
		echo "Delete unsuccessful";
	}


	include 'close_db_con.php';

}

?>