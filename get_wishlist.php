<?php
include 'logincheck.php';

	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	$sql = "select i.title, i.item_id from wishlist c,item i where c.card_id = " . $_SESSION ["card_number"] ." and
			i.item_id = c.item_id";

	$resultset = $conn->query ( $sql );

	include 'close_db_con.php';

	$recJson = reToJson ( $resultset );

	$json_data = json_encode ( $recJson );
	echo $json_data;

?>