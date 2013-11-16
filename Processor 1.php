<?php
			
	$rg=$_POST['rg'];
	
	header('Access-Control-Allow-Origin: *');

	$getjsonfile = "api.kabantayngbayan.ph/saro?app_id=527c4daf5e13db245f9ab5e1&limit=1000&region=".$rg;
	$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$ch = curl_init();
							
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$getjsonfile);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	$result=curl_exec($ch);
	curl_close($ch);
							
	$hI = json_decode($result);
		
	foreach($hI->data as $node){
	
		?>
		
			<div class="pretty primary medium btn" style="width:100%; color:#ffffff;" id="<?php echo $node->object_code; ?>" onclick="func_<?php echo $node->object_code; ?>()">
			<?php echo $node->object_description; ?>
			
			<script>
				
				function func_<?php echo $node->object_code; ?>(){
					$('#ldc').show();
					$('#ctp').html('');
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});
					$("#ctc").show();
					$("#ctc").animate({opacity:'1'}, 500);
					$.ajax({
						type: "POST",
						url: 'http://gcccs.org/ibantay/Processor%202.php',
						data: {
							ct: '<?php echo $node->object_code; ?>',
							cn: '<?php echo $node->object_description; ?>',							
							rg: '<?php echo $rg; ?>'
						},
						success: function(data){
							$('#ldc').hide();
							$('#ctp').html(data);							
						}
					});
				
				}				
			
			</script>
			
			</div>
		
		<?php	
								
	}
									
?>