<?php 

include_once("db.php");

header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");


$fname = ucwords($_GET["fullname"]);
$email = $_GET["email"];
$username = $_GET["username"];
$password = $_GET["pass"];
$gender = $_GET["gender"];
$bdaym = $_GET["bdaym"];
$bdayd = $_GET["bdayd"];
$bdayy = $_GET["bdayy"];

$sql="INSERT INTO tblusers (fullname,username,password,email,gender,birthdate)
values('".$fname."', '".$username."', '".$password."', '".$email."', '".$gender."', DATE '".$bdayy."-".$bdaym."-".$bdayd."')";
if (!mysql_query($sql))
  {
  echo('Error: ' . mysql_error($link));
  }
else
{

echo $_GET['callback']."(".json_encode(array("fname"=>$fname)).");";
}
?>