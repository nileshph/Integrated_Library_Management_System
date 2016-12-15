<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Successful registration</h1>
<?php
include logincheck.php;
include 'get_db_con.php';
$sql = "select * from person where username='".$_SESSION ["username"]."';";
if ($conn->query ( $sql ) === FALSE)
{
	include 'close_db_con.php';
	return;
}
$resultset =$conn->query($sql);
$row = $resultset->fetch_assoc ();

// Echo session variables that were set on previous page
echo "<b>Welcome </b>  " . $row["first_name"] ." ".$row["middle_name"]." ".$row["last_name"]. ".<br>";
echo "<b> Username :</b> ". $row["username"].".<br/>" ; 
echo "<b> Card No. : </b> ".$row["card_number"].".<br/>";
echo "Remember your card number. Please Wait 24 hrs before logging in.";
include 'close_db_con.php';
session_destroy();
?>
<br><a href="index.php">Home</a>
</body>
</html>