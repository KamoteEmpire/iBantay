<?php 

include_once("db.php");

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

$entryID = $_GET["entryID"];
$username = $_GET["username"];
$response = "notliked";

$sql = "SELECT * FROM tblactions where forID = '".$entryID."' and username = '".$username."'";
$select = mysql_query($sql);
if (mysql_num_rows($select) > 0) {
	$row = mysql_fetch_array($select);
	if ($row['type'] == 'l')
	{
	$response = "liked";
	}
	else if ($row['type'] == 'd')
	{
	$response = "disliked";
	}
}
echo $_GET['callback']."(".json_encode(array("response"=>$response)).");";
?>