<?php
include 'logincheck.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$item_id = clean_input ( $_GET ["item_id"] );
	$card_id = $_SESSION ["card_number"];
	$quantity = clean_input ( $_GET ["quantity"] );

	$sql = "select * from item where item_id=" . $item_id ." and active_ind=1;";

	$result_set = $conn->query ( $sql );

	if ($result_set->num_rows > 0) {
		$row = $result_set->fetch_assoc ();
		$quantity_avail = $row ["quantity"];

		if ($quantity_avail >= $quantity) {
			$updated_by = $_SESSION ["username"];
			$updated_date = date ( "Y-m-d" );
			$quantity_new = $quantity_avail - $quantity;
			$sql = "update item set quantity=" . $quantity_new . " where item_id=" . $item_id;

			//15 days hardcoded
			$today = date ( 'Y-m-d' );
			$due_date = date ( 'Y-m-d', strtotime ( $today . ' + 15 days' ) );

			if ($conn->query ( $sql ) === TRUE) {
				$sql = "insert into loan (card_id,item_id,date_out,due_date,updated_by,updated_date,quantity) values
						(" . $card_id . "," . $item_id . ",'" . date("Y-m-d")."','".$due_date."','".$updated_by . "','" . $updated_date . "'," . $quantity.")";

				if ($conn->query ( $sql ) === TRUE) {
					$sql = "select order_number from loan where card_id=" . $card_id .
					" order by order_number desc";

					//echo $sql;
					$result_set = $conn->query ( $sql );
					$row = $result_set->fetch_assoc ();
					$order_number = $row ["order_number"];

					$sql = "delete from cart where card_id=" .$card_id ." and item_id=" .$item_id;
					$conn->query ( $sql );

					echo "Order successful, Order ID: " . $order_number;
					$conn->query ( $sql );
				} else {
					echo "Error in order creation";
				}
			} else {
				echo "Error in item quantity update";
				return;
			}
		} else {
			echo "item not available";
			return;
		}
	} else {
		echo "item does not exist";
	}
}
?>