<?php
			
	$pd=$_POST['pd'];
	$pr=$_POST['pr'];
	$rd=$_POST['rd'];
	
	header('Access-Control-Allow-Origin: *');

	$getjsonfile = "api.kabantayngbayan.ph/saro?app_id=527c4daf5e13db245f9ab5e1&id=".$pd;
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
	<br/><p style="font-size:18px; display:inline; text-align:center;"><?php echo $rd; ?></p>
	<br/><p style="font-size:14px; display:inline; text-align:center;"><?php echo $pr; ?></p><br/><br/>
	
	<?php
		
	foreach($hI->data as $node){
			
		?>
		
			<div class="warning alert" style="width:100%; font-size:14px; text-align:left;" id="<?php echo $node->id; ?>">
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Year:</p> 
					</div>
					<div class="nine columns">
						<?php echo $node->year; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Department:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->department_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Agency:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->agency_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Operating Unit:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->operating_unit; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">SPF Code:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->spf_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Sub SPF Code:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->sub_spf_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Fund Code:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->fund_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Region:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->region; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Appro Source:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->appro_src; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Program Code:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->program_code; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Category Code:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->object_code; ?>
					</div>
				</div>	
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Category:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->object_description; ?>
					</div>
				</div>	
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Amount:</p>
					</div>
					<div class="nine columns">
						Php <?php $number = $node->amount; echo number_format($number, 2); ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Issue Date:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->issue_date; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Barcode:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->barcode_no; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">Allotment Release Number:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->saro_no; ?>
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#705115; font-size:14px; display:inline;">ID:</p>
					</div>
					<div class="nine columns">
						<?php echo $node->id; ?>
					</div>
				</div>				
			</div>
		
		<?php	
								
	}
									
?>