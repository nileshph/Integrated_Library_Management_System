<?php
include "admin_check.php";
if ($_SERVER ["REQUEST_METHOD"] == "GET") {
	include 'get_db_con.php';
	include 'clean_input.php';

	$type = clean_input ( $_GET ["type"] );
	$title = clean_input ( $_GET ["title"] );
	$category = clean_input ( $_GET ["category"] );
	$pages = clean_input ( $_GET ["pages"] );
	$publication = clean_input ( $_GET ["publication"] );
	$edition = clean_input ( $_GET ["edition"] );
	$year = clean_input ( $_GET ["year"] );
	$quantity = clean_input ( $_GET ["quantity"] );
	$active_ind = 1;
	$note = "";
	$updated_by = $_SESSION ["username"];
	$updated_date = date ( "Y-m-d" );

	$author_name = clean_input ( $_GET ["author_name"] );

	$sql = "select author_id from author where name = '" . $author_name . "';";

	$author_id = 0;

	$result_set = $conn->query ( $sql );

	//echo "before";

	if ($result_set->num_rows > 0) {
		$row = $result_set->fetch_assoc ();
		$author_id = $row ["author_id"];

		//echo "autor_found";
	}
	else
	{

		//echo "not found";
		$sql = "insert into author (name,updated_by,updated_date) values
    			('" . $author_name . "','" . $_SESSION ["username"] . "','" . $updated_date . "');";

		$conn->query ( $sql );
		$sql = "select author_id from author where name = '" . $author_name . "';";
		$result_set = $conn->query ( $sql );
		$row = $result_set->fetch_assoc ();
		$author_id = $row ["author_id"];

	}

	$sql = "insert into item (
   type
  ,title
  ,category
  ,pages
  ,publication
  ,edition
  ,year
  ,quantity
  ,active_ind
  ,note
  ,updated_by
  ,updated_date
) values ('" . $type . "','" . $title . "','" . $category . "'," . $pages . ",'" . $publication . "'," . $edition . "," . $year . "," . $quantity . ",1,'" . $note . "','" . $updated_by . "','" . $updated_date . "')";
	$conn->query ( $sql );

	$sql = "select item_id from item where title = '" . $title . "'";
	$result_set = $conn->query ( $sql );

	if ($result_set->num_rows > 0) {
		$row = $result_set->fetch_assoc ();
		$item_id = $row ["item_id"];
	} else {
		echo '<script type="text/javascript">';
		echo 'alert("Item Not able to Add. Try Again");';
		echo 'window.location.href = "add_item.php";';
		echo '</script>';
	}
	// item_author
	$sql = "insert into item_author (item_id,author_id,updated_by,updated_date)
			values(" . $item_id . "," . $author_id . ",'" . $updated_by . "','" . $updated_date . "')";
	$conn->query ( $sql );
	echo '<script type="text/javascript">';
	echo 'alert("Item Stored. Store Another one.");';
	echo 'window.location.href = "add_item.php";';
	echo '</script>';
	include 'close_db_con.php';
}
?>