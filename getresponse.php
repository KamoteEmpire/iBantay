<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

	if(isset($_GET['limit'])) {
   		 $limit = "&limit=".$_GET['limit'];
				  } 
	else {
   		 $limit = "&limit=1000";
	      }
	if(isset($_GET['offset'])) {
    		$skip = "&skip=".$_GET['offset'];
				   } 
	 else {
   		 $skip = '';
		}
	if(isset($_GET['region'])) {
    		$region = "&region=".$_GET['region'];
				} 
	else {
   		 $region = '';
		}
	if(isset($_GET['id'])) {
   		 $id = "&id=".$_GET['id'];
			} 
	else {
   		 $id = '';
		}
	if(isset($_GET['objdesc'])) {
   		 $objdesc = "&object_description=".$_GET['objdesc'];
		} 
	else {
   		 $objdesc = '';
		}
		
	$getjsonfile = file_get_contents("http://api.kabantayngbayan.ph/saro?app_id=527c4daf5e13db245f9ab5e1".$id.$objdesc.$region.$skip.$limit);

	$info = json_decode($getjsonfile, TRUE);
	echo $_GET['callback']."(".json_encode($info).");";
?>