<?php

//to check if user name exist already in DB
include 'get_db_con.php';
include 'json_encode.php';
include 'clean_input.php';

$username = clean_input ( $_GET ["username"] );
$sql = "select username from person where username = '" . $item_id . "'";
$resultset = $conn->query ( $sql );

if ($resultset->num_rows > 0) {
	$recJson = reToJson ( $resultset );
	$json_data = json_encode ( $recJson );
}

include 'close_db_con.php';
echo $json_data;

?>