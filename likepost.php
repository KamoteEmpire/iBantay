//Like Post
<?php 

include_once("db.php");

	header('Access-Control-Allow-Origin: *');
	header("Content-Type: application/json");

	$type = $_GET["type"];
	$entryID = $_GET["entryID"];
	$username = $_GET["username"];
	$content = "s_like";

	if($type == 'l')
	{
		$sql="INSERT INTO tblactions (type,forID,username,content,postdate)
		values('".$type."','".$entryID."','".$username."','".$content."','".date("Y-m-d H:i:s")."')";
		if (!mysql_query($sql))
	 		 {
	  		echo('Error: ' . mysql_error($link));
	 		 }
		else
			{
			echo $_GET['callback']."(".json_encode(array("type"=>$type)).");";
			}
	}
	else if($type == 'd')
	{
		$sql="DELETE FROM tblactions where forID = '".$entryID."'	and username = '".$username."'";
		if (!mysql_query($sql))
	 		 {
	 		 echo('Error: ' . mysql_error($link));
	  		}
		else
			{
			echo $_GET['callback']."(".json_encode(array("type"=>$type)).");";
			}
	}
?>