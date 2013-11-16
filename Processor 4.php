<?php
			
	$rta=$_POST['rta'];
	
	header('Access-Control-Allow-Origin: *');

	$getjsonfile = "api.kabantayngbayan.ph/saro?app_id=527c4daf5e13db245f9ab5e1&limit=1000&region=".$rta;
	$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$ch = curl_init();
							
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$getjsonfile);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	$result=curl_exec($ch);
	curl_close($ch);
							
	$hI = json_decode($result);
		
	$i=0;
	$total=0;
		
	foreach($hI->data as $node){
		
		$i++;
		$amvar[$i]= abs($node->amount);
		$total += $amvar[$i];
							
	}
		
	?><p style="font-size:14px; margin-top:5px;"><?php echo "Total Amount: <br/>Php ".number_format($total, 2); ?></p>