<?php
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	
	$keyword = clean_input ( $_GET ["keyword"] );
	
	if(!$keyword == "")
	
	$sql = "select * from item where title like '%".$keyword."%' and active_ind = 1 and type = 'movie'";
	$resultset = $conn->query ( $sql );
	
	include 'close_db_con.php';
	
	$rs = array ();	
	$rs = addToArr($resultset,$rs);

	$json_data = json_encode ( $rs );
	echo $json_data;
}
?>