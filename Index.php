<!DOCTYPE html>

<html>

	<head>
	
		<script>
			var meta = document.createElement("meta");
			meta.setAttribute('name','viewport');
			meta.setAttribute('content','initial-scale='+ (1/window.devicePixelRatio) + ',user-scalable=no');
			document.getElementsByTagName('head')[0].appendChild(meta);
		</script>
	
		<link rel="stylesheet" href="http://gcccs.org/ibantay/css/gumby.css">
		<script src="http://gcccs.org/ibantay/js/libs/modernizr-2.6.2.min.js"></script>
		
		<style>
		
			.btn,.drawer { margin-bottom:10px; }
			.drawer { text-align: center; }
			h1.lead { border-bottom: 1px dotted #ccc; margin-bottom: 30px; }
			h4.lead { margin-bottom:10px; }
			#icon_map ul li { font-size: 16px; }
			.smallify { font-size: 13px; }
			.modal h2, .modal .btn { margin: 5% 0 20px; }
			
		</style>		
		
		<script type="text/javascript" src="http://gcccs.org/ibantay/js/jquery-n.js"></script>

		<script>			
			
			window.onload = function(){
				var regArray = ["1","2","3","CAR","NCR","4a","4b","5","6","7","8","9","10","11","12","13","ARMM"];
				var regID = ["rg1","rg2","rg3","car","ncr","rg4a","rg4b","rg5","rg6","rg7","rg8","rg9","rg10","rg11","rg12","rg13","armm"];
				var parID = ["lblfrg1","lblfrg2","lblfrg3","lblfcar","lblfncr","lblfrg4a","lblfrg4b","lblfrg5","lblfrg6","lblfrg7","lblfrg8","lblfrg9","lblfrg10","lblfrg11","lblfrg12","lblfrg13","lblfarmm"];
				var rgName = ["Region 1","Region 2","Region 3","CAR","NCR","Region 4a","Region 4b","Region 5","Region 6","Region 7","Region 8","Region 9","Region 10","Region 11","Region 12","Region 13","ARMM"];
				
				$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[0]},success: function(data){$('#lblfrg1').append('<br/>'+data);$('#ldcreg1').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[1]},success: function(data){$('#lblfrg2').append('<br/>'+data);$('#ldcreg2').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[2]},success: function(data){$('#lblfrg3').append('<br/>'+data);$('#ldcreg3').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[3]},success: function(data){$('#lblfcar').append('<br/>'+data);$('#ldcreg4').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[4]},success: function(data){$('#lblfncr').append('<br/>'+data);$('#ldcreg5').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[5]},success: function(data){$('#lblfrg4a').append('<br/>'+data);$('#ldcreg6').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[6]},success: function(data){$('#lblfrg4b').append('<br/>'+data);$('#ldcreg7').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[7]},success: function(data){$('#lblfrg5').append('<br/>'+data);$('#ldcreg8').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[8]},success: function(data){$('#lblfrg6').append('<br/>'+data);$('#ldcreg9').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[9]},success: function(data){$('#lblfrg7').append('<br/>'+data);$('#ldcreg10').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[10]},success: function(data){$('#lblfrg8').append('<br/>'+data);$('#ldcreg11').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[11]},success: function(data){$('#lblfrg9').append('<br/>'+data);$('#ldcreg12').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[12]},success: function(data){$('#lblfrg10').append('<br/>'+data);$('#ldcreg13').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[13]},success: function(data){$('#lblfrg11').append('<br/>'+data);$('#ldcreg14').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[14]},success: function(data){$('#lblfrg12').append('<br/>'+data);$('#ldcreg15').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[15]},success: function(data){$('#lblfrg13').append('<br/>'+data);$('#ldcreg16').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[16]},success: function(data){$('#lblfarmm').append('<br/>'+data);$('#ldcreg17').hide();}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});
				
				
				for (var i = 0, n = regArray.length; i<n; i++) {				
					var el = document.getElementById(regID[i]);						
					el.addEventListener('click', (function(i, el) { 
					return function() {
						$('#ldr').show();
						$("#gr1").hide();
						$("#gr1").css({opacity:'0'});
						$("#gr2").hide();
						$("#gr2").css({opacity:'0'});
						$("#gr3").hide();
						$("#gr3").css({opacity:'0'});
						$("#gr4").hide();
						$("#gr4").css({opacity:'0'});
						$("#gr5").hide();
						$("#gr5").css({opacity:'0'});						
						$("#rgp").html('<br/>'+rgName[i]+' - Categories'+'<br/><br/>');
						$("#rgc").show();
						$("#rgc").animate({opacity:'1'}, 500);
						detc = '2';
						$.ajax({
							type: "POST",
							url: 'http://gcccs.org/ibantay/Processor%201.php',
							data: {
								rg: regArray[i] 
							},
							success: function(data){
								$('#ldr').hide();
								$('#rgp').append(data);
								var duplicateChk = {};		
								$('div[id]').each (function () {
									if (duplicateChk.hasOwnProperty(this.id)) {
									   $(this).remove();
									} else {
									   duplicateChk[this.id] = 'true';
									}
								});
							}
						});						
					}
					})(i, el), false);
				}				
			}
			
			var detc = '0';
		
			function rei(){
				$("#rg1").animate({opacity:'1'}, 150, function() {$("#rg2").animate({opacity:'1'}, 150, function() {$("#rg3").animate({opacity:'1'}, 150, function() {$("#car").animate({opacity:'1'}, 150, function() {$("#ncr").animate({opacity:'1'}, 150, function() {$("#rg4a").animate({opacity:'1'}, 150, function() {$("#rg4b").animate({opacity:'1'}, 150, function() {$("#rg5").animate({opacity:'1'}, 150, function() {$("#rg6").animate({opacity:'1'}, 150, function() {$("#rg7").animate({opacity:'1'}, 150, function() {$("#rg8").animate({opacity:'1'}, 150, function() {$("#rg9").animate({opacity:'1'}, 150, function() {$("#rg10").animate({opacity:'1'}, 150, function() {$("#rg11").animate({opacity:'1'}, 150, function() {$("#rg12").animate({opacity:'1'}, 150, function() {$("#rg13").animate({opacity:'1'}, 150, function() {$("#armm").animate({opacity:'1'}, 150);});});});});});});});});});});});});});});});});
			}
			function reo(){
				$("#rg1").animate({opacity:'0'}, 25, function() {$("#rg2").animate({opacity:'0'}, 25, function() {$("#rg3").animate({opacity:'0'}, 25, function() {$("#car").animate({opacity:'0'}, 25, function() {$("#ncr").animate({opacity:'0'}, 25, function() {$("#rg4a").animate({opacity:'0'}, 25, function() {$("#rg4b").animate({opacity:'0'}, 25, function() {$("#rg5").animate({opacity:'0'}, 25, function() {$("#rg6").animate({opacity:'0'}, 25, function() {$("#rg7").animate({opacity:'0'}, 25, function() {$("#rg8").animate({opacity:'0'}, 25, function() {$("#rg9").animate({opacity:'0'}, 25, function() {$("#rg10").animate({opacity:'0'}, 25, function() {$("#rg11").animate({opacity:'0'}, 25, function() {$("#rg12").animate({opacity:'0'}, 25, function() {$("#rg13").animate({opacity:'0'}, 25, function() {$("#armm").animate({opacity:'0'}, 25);});});});});});});});});});});});});});});});});
			}
			function f1(){
				if(detc=='0'){
					$("#scon").show();
					$("#scon").css({opacity:'1'});
					detc = '1';
					rei();
				}
				else if(detc=='1'){
					$("#scon").show();
					$("#scon").css({opacity:'1'});
					$("#pcon").hide();
					$("#pcon").css({opacity:'0'});
					$("#acon").hide();
					$("#acon").css({opacity:'0'});
					$("#bcon").hide();
					$("#bcon").css({opacity:'0'});
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#ctc").hide();
					$("#ctc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});
					$("#gr1").show();
					$("#gr1").animate({opacity:'1'}, 150);
					$("#gr2").show();
					$("#gr2").animate({opacity:'1'}, 650);
					$("#gr3").show();
					$("#gr3").animate({opacity:'1'}, 1150);
					$("#gr4").show();
					$("#gr4").animate({opacity:'1'}, 1650);
					$("#gr5").show();
					$("#gr5").animate({opacity:'1'}, 2150);
					detc = '1';
					rei();
				}
				else if(detc=='2'){
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#ctc").hide();
					$("#ctc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});
					$("#gr1").show();
					$("#gr1").animate({opacity:'1'}, 150);
					$("#gr2").show();
					$("#gr2").animate({opacity:'1'}, 650);
					$("#gr3").show();
					$("#gr3").animate({opacity:'1'}, 1150);
					$("#gr4").show();
					$("#gr4").animate({opacity:'1'}, 1650);
					$("#gr5").show();
					$("#gr5").animate({opacity:'1'}, 2150);
					detc = '1';
				}
			}
			function f1a(){
				$("#ctc").hide();
				$("#ctc").css({opacity:'0'});
				$("#dtc").hide();
				$("#dtc").css({opacity:'0'});
				$("#rgc").show();
				$("#rgc").animate({opacity:'1'}, 500);
			}
			function f1b(){
				$("#rgc").hide();
				$("#rgc").css({opacity:'0'});
				$("#dtc").hide();
				$("#dtc").css({opacity:'0'});
				$("#ctc").show();
				$("#ctc").animate({opacity:'1'}, 500);
			}
			function f2(){
				if(detc=='0'){					
					$("#pcon").show();
					$("#pcon").animate({opacity:'1'}, 500);
					detc = '1';
				}
				else if(detc=='1'){
					reo();
					$("#pcon").show();
					$("#pcon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#bcon").hide();
					$("#bcon").css({opacity:'0'});
					$("#acon").hide();
					$("#acon").css({opacity:'0'});
					detc = '1';
				}
				else if(detc=='2'){
					$("#pcon").show();
					$("#pcon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#bcon").hide();
					$("#bcon").css({opacity:'0'});
					$("#acon").hide();
					$("#acon").css({opacity:'0'});
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#ctc").hide();
					$("#ctc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});
					detc = '1';
				}				
			}
			function f3(){
				if(detc=='0'){					
					$("#bcon").show();
					$("#bcon").animate({opacity:'1'}, 500);				
				}
				else if(detc=='1'){
					reo();
					$("#bcon").show();
					$("#bcon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#pcon").hide();
					$("#pcon").css({opacity:'0'});
					$("#acon").hide();
					$("#acon").css({opacity:'0'});
					detc = '1';
				}
				else if(detc=='2'){
					$("#bcon").show();
					$("#bcon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#pcon").hide();
					$("#pcon").css({opacity:'0'});
					$("#acon").hide();
					$("#acon").css({opacity:'0'});
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#ctc").hide();
					$("#ctc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});					
					detc = '1';
				}
			}
			function f4(){
				if(detc=='0'){					
					$("#acon").show();
					$("#acon").animate({opacity:'1'}, 500);					
				}
				else if(detc=='1'){
					reo();
					$("#acon").show();
					$("#acon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#bcon").hide();
					$("#bcon").css({opacity:'0'});
					$("#pcon").hide();
					$("#pcon").css({opacity:'0'});
					detc = '1';
				}
				else if(detc=='2'){
					$("#acon").show();
					$("#acon").animate({opacity:'1'}, 500);
					$("#scon").hide();
					$("#scon").css({opacity:'0'});
					$("#bcon").hide();
					$("#bcon").css({opacity:'0'});
					$("#pcon").hide();
					$("#pcon").css({opacity:'0'});
					$("#rgc").hide();
					$("#rgc").css({opacity:'0'});
					$("#ctc").hide();
					$("#ctc").css({opacity:'0'});
					$("#dtc").hide();
					$("#dtc").css({opacity:'0'});
					detc = '1';
				}
			}
		</script> 
	
	</head>
	
	<body>
		
		<div class="navbar" id="nav1" style="background: #ffcc33;">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
				<h1 class="four columns logo">
					<a href="#">
						<img src="http://gcccs.org/ibantay/img/ibantaylogo.png" gumby-retina />
					</a>
				</h1>
				<ul class="eight columns">
					<li><a href="#" onclick="f1()">Allotment Releases</a></li>
					<li><a href="#" onclick="f2()">Submit</a></li>
					<li><a href="#" onclick="f3()">About</a></li>
					<li><a href="#" onclick="f4()">Login</a></li>
				</ul>
			</div>
		</div>
		
		<div id="scon" style="opacity:0; margin-top:5px;" hidden>
			<div class="row" align="center" id='gr1'>
				<div class="three columns" id="rg1" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg1'>Region 1</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg1"/>
					</div>
				</div>
				<div class="three columns" id="rg2" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg2'>Region 2</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg2"/>
					</div>
				</div>
				<div class="three columns" id="rg3" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg3'>Region 3</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg3"/>
					</div>
				</div>
					<div class="three columns" id="car" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfcar'>CAR</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg4"/>
					</div>
				</div>
			</div>
			<div class="row" align="center" id='gr2'>
				<div class="twelve columns" id="ncr" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfncr'>NCR</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg5"/>
					</div>
				</div>			
			</div>
			<div class="row" align="center" id='gr3'>
				<div class="three columns" id="rg4a" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg4a'>Region 4A</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg6"/>
					</div>
				</div>
				<div class="three columns" id="rg4b" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg4b'>Region 4B</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg7"/>
					</div>
				</div>
				<div class="three columns" id="rg5" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg5'>Region 5</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg8"/>
					</div>
				</div>
				<div class="three columns" id="rg6" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg6'>Region 6</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg9"/>
					</div>
				</div>
			</div>
			
			<div class="row" align="center" id='gr4'>
				<div class="three columns" id="rg7" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg7'>Region 7</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg10"/>
					</div>
				</div>
				<div class="three columns" id="rg8" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg8'>Region 8</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg11"/>
					</div>
				</div>
				<div class="three columns" id="rg9" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg9'>Region 9</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg12"/>
					</div>
				</div>
				<div class="three columns" id="rg10" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg10'>Region 10</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg13"/>
					</div>
				</div>
			</div>	
			
			<div class="row" align="center" id='gr5'>
				<div class="three columns" id="rg11" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg11'>Region 11</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg14"/>
					</div>
				</div>
				<div class="three columns" id="rg12" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg12'>Region 12</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg15"/>
					</div>
				</div>
				<div class="three columns" id="rg13" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfrg13'>Region 13</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg16"/>
					</div>
				</div>
				<div class="three columns" id="armm" style="opacity:0;">
					<div class="b1 alert">
						<p style="font-size:18px; padding-top:10px;" id='lblfarmm'>ARMM</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg17"/>
					</div>
				</div>
			</div>
			
			<div id='rgc' style="opcity: 0" hidden>
				<div class="row" align="center">
					<div class="twelve columns">
						<div class="b2 alert">							
							<p style="font-size:18px;" id="rgp"></p>
							<img src="img/ajax-loader.gif" style="margin-top:10px; margin-bottom:40px;" id="ldr"/>
							<br/><div class="pretty dark medium btn" style="width:100%;"><a href="#" onclick="f1()">Back</a></div>
						</div>
					</div>			
				</div>
			</div>
			<div id='ctc' style="opcity: 0" hidden>
				<div class="row" align="center">
					<div class="twelve columns">
						<div class="b2 alert">							
							<p style="font-size:18px;" id="ctp"></p>
							<img src="img/ajax-loader.gif" style="margin-top:10px; margin-bottom:40px;" id="ldc"/>
							<br/><div class="pretty dark medium btn" style="width:100%;"><a href="#" onclick="f1a()">Back</a></div>
						</div>
					</div>			
				</div>
			</div>
			<div id='dtc' style="opcity: 0" hidden>
				<div class="row" align="center">
					<div class="twelve columns">
						<div class="b2 alert">							
							<p style="font-size:18px;" id="dtp"></p>
							<img src="img/ajax-loader.gif" style="margin-top:10px; margin-bottom:40px;" id="ldd"/>
							<br/><div class="pretty dark medium btn" style="width:100%;"><a href="#" onclick="f1b()">Back</a></div>
						</div>
					</div>			
				</div>
			</div>
		</div>
			
		<div id="pcon" style="opacity:0;" hidden>
			<div class="row" align="center">
				<div class="three columns" id="rge1">
					<div class="b1 alert">
						<img src="img/aaa.png" style="margin-top:10px;" width="200px" height="200px"/>
						<p style="font-size:18px;">Submit</p>
					</div>
				</div>
			</div>
		</div>			
		
		<div id="bcon" style="opacity:0;" hidden>
			<div class="row" align="center">
				<div class="three columns" id="rge2">
					<div class="b1 alert">
						<img src="img/aaa.png" style="margin-top:10px;" width="200px" height="200px"/>
						<p style="font-size:18px;">About</p>
					</div>
				</div>
			</div>
		</div>
		
		<div id="acon" style="opacity:0;" hidden>
			<div class="row" align="center">
				<div class="three columns" id="rge3">
					<div class="b1 alert">
						<img src="img/aaa.png" style="margin-top:10px;" width="200px" height="200px"/>
						<p style="font-size:18px;">Login</p>
					</div>
				</div>
			</div>
		</div>
			
		<script>
		
			var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
			
			if(!oldieCheck) {
			document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
			} 
			
			else {
			document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
			}
			
		</script>
		
		<script>
		
			if(!window.jQuery) {
			
				if(!oldieCheck) {				
					document.write('<script src="http://gcccs.org/ibantay/js/libs/jquery-2.0.2.min.js"><\/script>');
				}
				
				else {
				document.write('<script src="http://gcccs.org/ibantay/js/libs/jquery-1.10.1.min.js"><\/script>');
				}
				
			}
		</script>

		<!--
		Include gumby.js followed by UI modules.
		Or concatenate and minify into a single file
		<script src="http://gcccs.org/ibantay/js/libs/gumby.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.retina.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.fixed.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.skiplink.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.toggleswitch.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.checkbox.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.radiobtn.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.tabs.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.navbar.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/gumby.fittext.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/ui/jquery.validation.js"></script>
		<script src="http://gcccs.org/ibantay/js/libs/gumby.init.js"></script>-->

		<script src="http://gcccs.org/ibantay/js/libs/gumby.min.js"></script>
		<script src="http://gcccs.org/ibantay/js/plugins.js"></script>
		<script src="http://gcccs.org/ibantay/js/main.js"></script>

		<!-- Change UA-XXXXX-X to be your site's ID -->
		<!--<script>
		window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
		Modernizr.load({
		load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
		});
		</script>-->

		<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
		chromium.org/developers/how-tos/chrome-frame-getting-started -->
		<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
	
	</body>

</html>