<?php
include 'logincheck.php';

if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$item_id = clean_input ( $_GET ["item_id"] );
	$card_id = $_SESSION ["card_number"];

	$sql = "select * from wishlist where card_id =" . $card_id . " and item_id=" . $item_id;

	$result_set = $conn->query ( $sql );

	if ($resultset->num_rows > 0) {
		echo "item already exist in wishlist";
	} else {

		$sql = "insert into wishlist (item_id,card_id) values(" . $item_id . "," . $card_id . ")";

		if ($conn->query ( $sql ) === TRUE)
			echo "wishlist update Successful";
		else {
			echo "Already wishlisted";
			return;
		}
	}
}

?>