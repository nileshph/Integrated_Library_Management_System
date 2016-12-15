<?php
include 'admin_check.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';

	$order_id = clean_input ( $_GET ["order_number"] );
	$card_id = $_SESSION ["card_number"];

	$updated_by = $_SESSION ["username"];
	$updated_date = date ( "Y-m-d" );

	$sql = "select item_id,DATE_FORMAT(due_date,'%Y-%m-%d') as due_date from loan
			where order_number=" . $order_id . " and date_in is null;";

	// echo $sql;
	$result_set = $conn->query ( $sql );

	if ($result_set->num_rows > 0) {
		$row = $result_set->fetch_assoc ();

		$time = strtotime ( $row ["due_date"] );

		$newformat = date ( 'Y-m-d', $time );
		$due_date = $newformat;
		$sysdate = date ( 'Y-m-d' );

		if ($due_date < $sysdate) {
			// create fines
			$datetime1 = new DateTime ( $due_date );
			$datetime2 = new DateTime ( $sysdate );
			$interval = $datetime1->diff ( $datetime2 );
			$days = $interval->format ( '%R%a' );
				
			// 0.1$ fine per day
			$fine_amt = $days * 0.1;
				
			$sql = "insert into fine (order_number,amount,payment_status,note,updated_by,updated_date) values(" . $order_id . "," . $fine_amt . ",'Unpaid','Days:" . $days . "','" . $updated_by . "','" . $updated_date . "')";
			// echo $sql;
			if (! $conn->query ( $sql ) === TRUE) {
				echo "Error in fine creation";
			}
		}
		$sql = "select * from item where item_id=" . $item_id ." and active_ind=1;";

		$result_set = $conn->query ( $sql );

		if ($result_set->num_rows > 0) {
			$row = $result_set->fetch_assoc ();
			$quantity_avail = $row ["quantity"];
				
			$quantity_new = $quantity_avail + 1;
				
			$sql = "update item set quantity=" . $quantity_new . " where item_id=" . $item_id;

			//15 days hardcoded
			$today = date ( 'Y-m-d' );
			$due_date = date ( 'Y-m-d', strtotime ( $today . ' + 15 days' ) );
			$conn->query ( $sql );
		}

		$sql = "update loan set date_in ='" . $updated_date . "',updated_by='".$updated_by."', updated_date='".$updated_date."' where order_number=" . $order_id;
		if ($conn->query ( $sql ) === TRUE) {
			echo '<script type="text/javascript">';
			echo 'alert("Checked In");';
			echo 'window.location.href = "item_checkin.php";';
			echo '</script>';
		} else
		{
			echo '<script type="text/javascript">';
			echo 'alert("Item Not able to CheckIn. Try Again");';
			echo 'window.location.href = "item_checkin.php";';
			echo '</script>';
		}
	} else{
		echo '<script type="text/javascript">';
		echo 'alert("Due Date not found");';
		echo 'window.location.href = "item_checkin.php";';
		echo '</script>';
	}
		include 'close_db_con.php';
}
?>