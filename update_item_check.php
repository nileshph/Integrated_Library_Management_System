<?php
include 'admin_check.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';
	
	$item_id = clean_input ( $_GET ["id"] );
	$type = clean_input ( $_GET ["type"] );
	$isbn = clean_input ( $_GET ["isbn"] );
	$title = clean_input ( $_GET ["title"] );
	$category = clean_input ( $_GET ["category"] );
	$pages = clean_input ( $_GET ["pages"] );
	$publication = clean_input ( $_GET ["publication"] );
	$edition = clean_input ( $_GET ["edition"] );
	$year = clean_input ( $_GET ["year"] );
	$quantity = clean_input ( $_GET ["quantity"] );
	$note = $_GET ["note"];
	$updated_by = $_SESSION ["username"];
	$updated_date = date ( "Y-m-d" );
	
	$sql = "update item set type = '" . $type . "',isbn='" . $isbn . "',title='" . $title . "',category = '" . $category . "',pages=" . $pages . ",publication='" . $publication . "',edition = " . $edition . "," . "year=" . $year . ",quantity=" . $quantity . ",note='" . $note . "',updated_by='" . $updated_by . "',updated_date='" . $updated_date . "'where item_id=".$item_id;
	if ($conn->query ( $sql ) === TRUE){
		echo '<script type="text/javascript">';
		echo 'alert("Item Updated");';
		echo 'window.location.href = "update_item.php";';
		echo '</script>';
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("Item cannot be Updated. Try Again.");';
		echo 'window.location.href = "update_item.php";';
		echo '</script>';	
	}
}
?>