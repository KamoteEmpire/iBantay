<?php
header('Access-control-Allow-origin:*');
			
	$rg=$_POST['rg'];
	$ct=$_POST['ct'];
	$cn=$_POST['cn'];
	
	header('Access-Control-Allow-Origin: *');

	$getjsonfile = "api.kabantayngbayan.ph/saro?app_id=527c4daf5e13db245f9ab5e1&limit=10&region=$rg&object_code=$ct";
	$agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
	$ch = curl_init();
							
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_URL,$getjsonfile);
	curl_setopt($ch, CURLOPT_USERAGENT, $agent);
	$result=curl_exec($ch);
	curl_close($ch);
							
	$hI = json_decode($result);
	
	?>
	
	<br/><p style="font-size:18px; display:inline; text-align:center;">Available "<?php echo $cn;?>" Projects</p><br/>
	<p style="font-size:14px; display:inline;">Click one of the projects for more details</p><br/><br/>
		
	<?php
		
	foreach($hI->data as $node){
			
		?>		
		
		<div class="primary alert" style="width:100%; font-size:14px; text-align:left;" id="saro_<?php echo $node->id; ?>">
			<p style="color:#e2e2e2; font-size:14px; display:inline;">Description:</p> <?php echo $node->description; ?><br/>
			<p style="color:#e2e2e2; font-size:14px; display:inline;">Pupose:</p> <?php echo $node->purpose; ?>
			
			<script>
				jQuery(document).ready(function(){
					$("#saro_<?php echo $node->id; ?>").bind('click', function () {
						$('#ldd').show();
						$('#dtp').html('');
						$("#rgc").hide();
						$("#rgc").css({opacity:'0'});
						$("#ctc").hide();
						$("#ctc").css({opacity:'0'});
						$("#dtc").show();
						$("#dtc").animate({opacity:'1'}, 500);
						$.ajax({
							type: "POST",
							url: 'http://gcccs.org/ibantay/Processor%203.php',
							data: {
								pd: '<?php echo $node->id; ?>',
								pr: '<?php echo $node->purpose; ?>',
								rd: '<?php echo $node->description; ?>'
							},
							success: function(data){
								$('#ldd').hide();
								$('#dtp').html(data);							
							}
						});			
					});
				});
			</script>
							
		</div>
		
		<?php	
								
	}
									
?>