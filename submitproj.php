<?php 

include_once("db.php");

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");


$fname = $_GET["fullname"];
$email = $_GET["email"];
$contact = $_GET["contact"];
$projname = htmlentities($_GET["projname"]);
$projpur = htmlentities($_GET["projpur"]);
$projloc = htmlentities($_GET["projloc"]);
$projcost = str_replace(',', '', $_GET["projcost"]);
$projagen = htmlentities($_GET["projagen"]);
$projyear = $_GET["projyear"];

$sql="INSERT INTO tblsubproj (fullname,email,contact,projname,projpur,projloc,postdate,projcost,projagen,projyear)
	values('".$fname."','".$email."','".$contact."','".$projname."','".$projpur."','".$projloc."','".date("Y-m-d H:i:s")."',".$projcost.",'".$projagen."',".$projyear.")";;
if (!mysql_query($sql))
  {
  echo('Error: ' . mysql_error($link));
  }
else
{

echo $_GET['callback']."(".json_encode(array("fname"=>$fname)).");";
}
?>