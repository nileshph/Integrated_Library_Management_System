<?php
session_start ();
$username = $password = "";

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
	$username = clean_input ( $_POST ["user"] );
	$password = clean_input ( $_POST ["password"] );

	// check if card number or password is blank
	if ($username == "" || $password == "") {
		header ( "Location: login.html" );
		exit ();
	} else {
		// Get Connection to DB, mysql running on default port 3306 on google cloud
		include 'get_db_con.php';

		$sql = "select * from person where username= '" . $username."';";

		$resultset = $conn->query ( $sql );

		include 'close_db_con.php';

		$row = $resultset->fetch_assoc ();
		if ($resultset->num_rows > 0 && password_verify($password,$row["password"])) {
			if($row ["username"] =="admin"){
				$_SESSION ["username"]==$row["username"];
				header("Location: login_admin.php");
				exit();
			}
			if ($row["approved"] == 1){
				$_SESSION ["card_number"] = $row["card_number"];
				$_SESSION ["username"] = $username;
				$_SESSION ["role"] = $row["role"];
				$_SESSION ['last_activity'] = time ();
				header ( "Location: dashboard.php" );
				exit ();
			}
			else{
				session_destroy ();
				echo '<script type="text/javascript">';
				echo 'alert("Not authorized yet. Please wait for 24 hours..");';
				echo 'window.location.href = "index.php";';
				echo '</script>';
				exit ();
			}

		}
		else {
			session_destroy ();
			echo '<script type="text/javascript">';
			echo 'alert("Invalid User.");';
			echo 'window.location.href = "login.html";';
			echo '</script>';
			exit ();
		}
	}
}
function clean_input($input) {
	$input = trim ( $input );
	$input = stripslashes ( $input );
	$input = htmlspecialchars ( $input );
	return $input;
}

?>
