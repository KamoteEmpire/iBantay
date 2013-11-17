<?php 
include_once("db.php");

	header('Access-Control-Allow-Origin: *');
	header("Content-Type: application/json");

	$type = $_GET["type"];
	$entryID = $_GET["entryID"];
	$username = $_GET["username"];
	$content = "s_dontcare";

	if($type == 'l')
	{
	$content =  "s_like";
		$sql="DELETE FROM tblactions where forID = '".$entryID."' and username = '".$username."'";
		mysql_query($sql);
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
	$content =  "s_dislike";
		$sql="DELETE FROM tblactions where forID = '".$entryID."' and username = '".$username."'";
		mysql_query($sql);
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
	else
	{
		$sql="DELETE FROM tblactions where forID = '".$entryID."' and username = '".$username."'";
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