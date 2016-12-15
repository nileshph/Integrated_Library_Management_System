
<?php
include 'admin_check.php';
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'json_encode.php';
	include 'clean_input.php';	
	$item_id = clean_input ( $_GET ["id"] );
	$updated_by = $_SESSION ["username"];
	$updated_date = date ( "Y-m-d" );
	$sql = "update item set active_ind = 0,updated_by='".$updated_by."',updated_date='".$updated_date."' where item_id = " . $item_id;
	//$conn->query ( $sql );
	if ($conn->query($sql) === TRUE){
		echo '<script type="text/javascript">';
		echo 'alert("Item Deleted.");';
		echo 'window.location.href = "delete_item.php";';
		echo '</script>';
	}
	else
	{echo '<script type="text/javascript">';
		echo 'alert("Item Not able to Delete. Try Again");';
		echo 'window.location.href = "delete_item.php";';
		echo '</script>';}
		include 'close_db_con.php';
}

?>