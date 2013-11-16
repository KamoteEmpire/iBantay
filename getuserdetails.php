//Get user details
<?php 

include_once("db.php");

	header('Access-Control-Allow-Origin: *');
	header("Content-Type: application/json");

	$username = $_GET["username"];

		$sql = "SELECT * FROM tblusers where username = '".$username."' limit 1";
		$select = mysql_query($sql);
		$row = mysql_fetch_array($select);
echo $_GET['callback']."(".json_encode(array("fullname"=>$row['fullname'],"email"=>$row['email'],)).");";
?>
