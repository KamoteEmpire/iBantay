<?php
header('Access-control-Allow-origin:*');
			
	$tng=$_POST['tng'];
	
	mysql_connect("localhost", "gcccsorg", "3ec9JBxc13")or die("cannot connect"); 
	mysql_select_db("gcccsorg_ibantay")or die("cannot select DB");	
	$tbs="SELECT * FROM tblsubproj WHERE projloc LIKE '%".$tng."%'";
	$tbsq=mysql_query($tbs);
	$tbsr=mysql_num_rows($tbsq);
				
	while($row = mysql_fetch_array($tbsq)){
		
		$R0 = $row['projID'];
		$R1 = $row['fullname'];
		$R2 = $row['email'];
		$R3 = $row['contact'];
		$R4 = $row['projname'];
		$R5 = $row['projpur'];
		$R6 = $row['projloc'];
		$R7 = $row['postdate'];
		$R8 = $row['projyear'];
		$R9 = $row['projagen'];
		$R10 = $row['projcost'];
		
		?>
			
			<div class="sr1 alert" style="width:100%; font-size:14px; text-align:left;" id="<?php echo $R0; ?>">
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Proposal By:</p> 
					</div>
					<div class="seven columns">
						<?php echo $R1; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">E-mail:</p>
					</div>
					<div class="seven columns">
						<?php echo $R2; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Contact Number:</p>
					</div>
					<div class="seven columns">
						<?php echo $R3; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Project Proposal Title:</p>
					</div>
					<div class="seven columns">
						<?php echo $R4; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Project Purpose:</p>
					</div>
					<div class="seven columns">
						<?php echo $R5; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Project Location:</p>
					</div>
					<div class="seven columns">
						<?php echo $R6; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Date Posted:</p>
					</div>
					<div class="seven columns">
						<?php echo $R7; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Target Year:</p>
					</div>
					<div class="seven columns">
						<?php echo $R8; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Implementing Agency:</p>
					</div>
					<div class="seven columns">
						<?php echo $R9; ?>
					</div>
				</div>
				<div class="row">
					<div class="five columns">
						<p style="font-size:14px; display:inline;">Project Cost:</p>
					</div>
					<div class="seven columns">
						<?php echo $R10; ?>
					</div>
				</div>								
			</div>		
		
		<?php
							
	}