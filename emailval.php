//Email Validation
<?php 
include_once("db.php");
	header('Access-Control-Allow-Origin: *');
	header("Content-Type: application/json");
		$email = $_GET["email"];
		$username = $_GET["username"];

		$emailcode = "";
		$usernamecode = "";

		$sql = "SELECT email FROM tblusers WHERE email = '" .$email. "'";
		$select = mysql_query($sql);
			if (mysql_num_rows($select) > 0) {
				$emailcode = "exists";
							}
			else
				{
				$emailcode = "notexists";
				}

		$sql = "SELECT email FROM tblusers WHERE username = '" .$username. "'";
		$select = mysql_query($sql);
			if (mysql_num_rows($select) > 0) {
				$usernamecode = "exists";
							}
			else
				{
				$usernamecode = "notexists";
				}

echo $_GET['callback']."(".json_encode(array("email"=>$email,"eexists"=> 			$emailcode,"username"=>$username,"uexists"=>$usernamecode)).");";
?>