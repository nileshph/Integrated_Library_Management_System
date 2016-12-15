<?php
include 'logincheck.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$item_id = clean_input ( $_GET ["item_id"] );
	$card_id = $_SESSION ["card_number"];

	$sql = "select * from cart where card_id =" . $card_id . " and item_id=" . $item_id;

	$result_set = $conn->query ( $sql );

	if ($resultset->num_rows > 0) {
		echo "item already exist in cart";
	} else {
		$quantity = clean_input ( $_GET ["quantity"] );
		$updated_by = $_SESSION ["username"];
		$updated_date = date ( "Y-m-d" );

		$sql = "select quantity from item where item_id=" . $item_id;

		$result_set = $conn->query ( $sql );
		$quantity_avail = 0;
		if ($resultset->num_rows > 0) {
			$row = $result->fetch_assoc ();
			$quantity_avail = $row ["quantity"];
		}

		if (! $quantity_avail < $quantity) {
			echo "item not available";
					return;
		}

		$sql = "insert into cart (item_id,card_id,quantity) values(" . $item_id . "," . $card_id . "," . 1 . ")";

		if ($conn->query ( $sql ) === TRUE)
			echo "Cart update Successful";
		else {
			echo "Already added in cart";
			return;
		}
	}
}

?>