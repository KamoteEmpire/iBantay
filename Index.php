<!DOCTYPE html>

<html>

	<head>
	
		<script>
			var meta = document.createElement("meta");
			meta.setAttribute('name','viewport');
			meta.setAttribute('content','initial-scale='+ (1/window.devicePixelRatio) + ',user-scalable=no');
			document.getElementsByTagName('head')[0].appendChild(meta);
		</script>
	
		<link rel="stylesheet" href="css/gumby.css">
		<script src="http://gcccs.org/ibantay/js/libs/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
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
		
		<script type="text/javascript">
			var epe1 = 0;
			var epe2 = 0;
			var epe3 = 0;
			var epe4 = 0;
			var epe5 = 0;
			var epe6 = 0;
			var epe7 = 0;
			var epe8 = 0;
			var epe9 = 0;
			var epe10 = 0;
			var epe11 = 0;
			var epe12 = 0;
			var epe13 = 0;
			var epe14 = 0;
			var epe15 = 0;
			var epe16 = 0;
			var epe17 = 0;
			google.load("visualization", "1", {packages:["corechart"]});
			google.setOnLoadCallback(drawChart);
			function drawChart() {
				var data = google.visualization.arrayToDataTable([
					['Task', 'Hours per Day'],
					['Region 1', parseInt(epe1)],
					['Region 2', parseInt(epe2)],
					['Region 3', parseInt(epe3)],
					['CAR', parseInt(epe4)],
					['NCR', parseInt(epe5)],
					['Region 4a', parseInt(epe6)],
					['Region 4b', parseInt(epe7)],
					['Region 5', parseInt(epe8)],
					['Region 6', parseInt(epe9)],
					['Region 7', parseInt(epe10)],
					['Region 8', parseInt(epe11)],
					['Region 9', parseInt(epe12)],
					['Region 10', parseInt(epe13)],
					['Region 11', parseInt(epe14)],
					['Region 12', parseInt(epe15)],
					['Region 13', parseInt(epe16)],
					['ARMM', parseInt(epe17)]
				]);
				var options = {
					title: 'Special Allotment Release Order FY 2013'
				};
				var chart = new google.visualization.PieChart(document.getElementById('piechart'));
					chart.draw(data, options);
			}
		</script>

		<script>			
			window.onload = function(){				
				var regArray = ["1","2","3","CAR","NCR","4a","4b","5","6","7","8","9","10","11","12","13","ARMM"];
				var tabArray = ["R1","R2","R3","CAR","NCR","R4a","R4b","R5","R6","R7","R8","R9","R10","R11","R12","R13","ARMM"];
				var regID = ["rg1","rg2","rg3","car","ncr","rg4a","rg4b","rg5","rg6","rg7","rg8","rg9","rg10","rg11","rg12","rg13","armm"];
				var tanID = ["tnrg1","tnrg2","tnrg3","tncar","tnncr","tnrg4a","tnrg4b","tnrg5","tnrg6","tnrg7","tnrg8","tnrg9","tnrg10","tnrg11","tnrg12","tnrg13","tnarmm"];
				var tabID = ["trg1","trg2","trg3","tcar","tncr","trg4a","trg4b","trg5","trg6","trg7","trg8","trg9","trg10","trg11","trg12","trg13","tarmm"];
				var mapID = ["mrg1","mrg2","mrg3","mcar","mncr","mrg4a","mrg4b","mrg5","mrg6","mrg7","mrg8","mrg9","mrg10","mrg11","mrg12","mrg13","marmm"];
				var parID = ["lblfrg1","lblfrg2","lblfrg3","lblfcar","lblfncr","lblfrg4a","lblfrg4b","lblfrg5","lblfrg6","lblfrg7","lblfrg8","lblfrg9","lblfrg10","lblfrg11","lblfrg12","lblfrg13","lblfarmm"];
				var rgName = ["Region 1","Region 2","Region 3","CAR","NCR","Region 4a","Region 4b","Region 5","Region 6","Region 7","Region 8","Region 9","Region 10","Region 11","Region 12","Region 13","ARMM"];
				
				$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[0]},success: function(data){$('#lblfrg1').append('<br/>'+data);epe1=$('#epe_1').val();console.log(epe1);drawChart();$('#ldcreg1').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[1]},success: function(data){$('#lblfrg2').append('<br/>'+data);epe2=$('#epe_2').val();console.log(epe2);drawChart();$('#ldcreg2').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[2]},success: function(data){$('#lblfrg3').append('<br/>'+data);epe3=$('#epe_3').val();console.log(epe3);drawChart();$('#ldcreg3').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[3]},success: function(data){$('#lblfcar').append('<br/>'+data);epe4=$('#epe_CAR').val();console.log(epe4);drawChart();$('#ldcreg4').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[4]},success: function(data){$('#lblfncr').append('<br/>'+data);epe5=$('#epe_NCR').val();console.log(epe5);drawChart();$('#ldcreg5').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[5]},success: function(data){$('#lblfrg4a').append('<br/>'+data);epe6=$('#epe_4a').val();console.log(epe6);drawChart();$('#ldcreg6').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[6]},success: function(data){$('#lblfrg4b').append('<br/>'+data);epe7=$('#epe_4b').val();console.log(epe7);drawChart();$('#ldcreg7').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[7]},success: function(data){$('#lblfrg5').append('<br/>'+data);epe8=$('#epe_5').val();console.log(epe8);drawChart();$('#ldcreg8').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[8]},success: function(data){$('#lblfrg6').append('<br/>'+data);epe9=$('#epe_6').val();console.log(epe9);drawChart();$('#ldcreg9').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[9]},success: function(data){$('#lblfrg7').append('<br/>'+data);epe10=$('#epe_7').val();console.log(epe10);drawChart();$('#ldcreg10').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[10]},success: function(data){$('#lblfrg8').append('<br/>'+data);epe11=$('#epe_8').val();console.log(epe11);drawChart();$('#ldcreg11').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[11]},success: function(data){$('#lblfrg9').append('<br/>'+data);epe12=$('#epe_9').val();console.log(epe12);drawChart();$('#ldcreg12').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[12]},success: function(data){$('#lblfrg10').append('<br/>'+data);epe13=$('#epe_10').val();console.log(epe13);drawChart();$('#ldcreg13').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[13]},success: function(data){$('#lblfrg11').append('<br/>'+data);epe14=$('#epe_11').val();console.log(epe14);drawChart();$('#ldcreg14').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[14]},success: function(data){$('#lblfrg12').append('<br/>'+data);epe15=$('#epe_12').val();console.log(epe15);drawChart();$('#ldcreg15').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[15]},success: function(data){$('#lblfrg13').append('<br/>'+data);epe16=$('#epe_13').val();console.log(epe16);drawChart();$('#ldcreg16').hide();$.ajax({type: "POST",url: 'http://gcccs.org/ibantay/Processor%204.php',data:{rta: regArray[16]},success: function(data){$('#lblfarmm').append('<br/>'+data);epe17=$('#epe_ARMM').val();console.log(epe17);drawChart();$('#ldcreg17').hide();
				}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});
				
				$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[0]}, success: function (data){$('#tnrg1').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[1]}, success: function (data){$('#tnrg2').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[2]}, success: function (data){$('#tnrg3').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[3]}, success: function (data){$('#tncar').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[4]}, success: function (data){$('#tnncr').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[5]}, success: function (data){$('#tnrg4a').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[6]}, success: function (data){$('#tnrg4b').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[7]}, success: function (data){$('#tnrg5').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[8]}, success: function (data){$('#tnrg6').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[9]}, success: function (data){$('#tnrg7').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[10]}, success: function (data){$('#tnrg8').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[11]}, success: function (data){$('#tnrg9').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[12]}, success: function (data){$('#tnrg10').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[13]}, success: function (data){$('#tnrg11').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[14]}, success: function (data){$('#tnrg12').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[15]}, success: function (data){$('#tnrg13').append(data);$.ajax({type: "POST", url: 'http://gcccs.org/ibantay/Processor%206.php', data:{tng: tabArray[16]}, success: function (data){$('#tnarmm').append(data);}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});}});
							
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
				for (var j = 0, m = regArray.length; j<m; j++) {				
					var ml = document.getElementById(mapID[j]);						
					ml.addEventListener('click', (function(j, ml) { 
					return function() {
						$('#ldr').show();
						$("#tb1").hide();
						$("#tb1").css({opacity:'0'});
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
						$("#rgp").html('<br/>'+rgName[j]+' - Categories'+'<br/><br/>');
						$("#rgc").show();
						$("#rgc").animate({opacity:'1'}, 500);
						detc = '2';
						$.ajax({
							type: "POST",
							url: 'http://gcccs.org/ibantay/Processor%201.php',
							data: {
								rg: regArray[j] 
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
					})(j, ml), false);
				}
				for (var k = 0, o = tabArray.length; k<o; k++) {				
					var tl = document.getElementById(tanID[k]);						
					tl.addEventListener('click', (function(k, tl) { 
					return function() {						
						$.ajax({
							type: "POST",
							url: 'http://gcccs.org/ibantay/Processor%205.php',
							data: {
								tng: tabArray[k] 
							},
							success: function(data){
								$('#'+tabID[k]).html(data);
							}
						});						
					}
					})(k, tl), false);
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
					$("#tb1").hide();
					$("#tb1").css({opacity:'0'});
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
			function f1c(){
				if(detc=='0'){
					$("#scon").show();
					$("#scon").css({opacity:'1'});
					$("#tb1").show();
					$("#tb1").animate({opacity:'1'}, 500);
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
					$("#tb1").show();
					$("#tb1").animate({opacity:'1'}, 500);
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
					detc = '1';
					rei();
				}
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
		
		<!--style type="text/css">
			dl.image_map {display:block; width:543px; height:908px; background:url(http://www.image-maps.com/uploaded_files/9201311160655098_philippines_region_map_04.gif); position:relative; margin:2px auto 2px auto;}
			a.BLINK {left:541px; top:906px; background:transparent;}
			a.BLINK {display:block; width:202px; height:17px; overflow:hidden; position:absolute; font-size:0px;}
			a.BLINK:hover  {background:black; border:1px dashed white; color:white; font-size:9px;}
		</style-->
	
	</head>
	
	<body>
	       
		<div class="navbar" id="nav1" style="background: #ffcc33;">
			<div class="row">
				<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
				<h1 class="four columns logo">
					<a href="#" onclick="f1c()">
						<img src="http://gcccs.org/ibantay/img/ibantaylogo.png" gumby-retina />
					</a>
				</h1>
				<ul class="eight columns">
					<li><a href="#" onclick="f1()">Allotment Releases</a></li>
					<li><a href="#" onclick="f2()">Proposals</a></li>
					<li><a href="#" onclick="f3()">About</a></li>
					<li><a href="#" onclick="f4()">Login</a></li>
				</ul>
			</div>
		</div>
		
		<div id="scon" style="margin-top:5px;" >
			<table id="tb1">
				<tr>
					<td colspan="3">
						<link rel="stylesheet" type="text/css" href="engine1/style.css" />
						<script type="text/javascript" src="engine1/jquery.js"></script>
						<div id="wowslider-container1" style="max-width:768px; margin-top: 10px">
							<div class="ws_images" style="width:100%;">
								<ul>
									<li><a href="#" id="a1"><img src="img/philippines_region_map_02.png" alt="iBantay" id="wows1_0"/></a></li>
									<li><a href="#" id="a2"><img src="img/philippines_region_map_02a.jpg" alt="Boses ni iBantay" id="wows2_0"/></a></li>
									<li><a href="#" id="a3"><img src="img/philippines_region_map_02b.jpg" alt="Pulso ni iBantay" id="wows3_0"/></a></li>
								</ul>
							</div>
							<div class="ws_shadow"></div>
						</div>
						<script type="text/javascript" src="engine1/wowslider.js"></script>
						<script type="text/javascript" src="engine1/script.js"></script>
					</td>
				</tr>
				<tr>					
					<td colspan="3" rowspan="11">
						<div style="text-align:center; width:543px; margin-left:auto; margin-right:auto;">
							<img id="Image-Maps_9201311160655098" src="img/philippines_region_map_04.gif" usemap="#Image-Maps_9201311160655098" width="543" height="908" class="map"/>
							<map id="_Image-Maps_9201311160655098" name="Image-Maps_9201311160655098">
							<area shape="poly" coords="165,236,164,233,162,231,160,230,159,230,158,230,156,230,155,228,157,224,158,222,156,217,155,210,157,205,162,205,167,210,166,213,172,217,176,222,182,223,187,222,188,220,189,218,189,214,187,209,186,203,186,195,187,187,189,182,189,180,191,176,192,172,194,166,194,162,195,156,195,151,194,149,193,145,191,144,190,143,187,141,187,139,188,133,189,131,189,127,191,125,193,121,194,117,195,111,198,106,198,103,198,98,198,95,199,91,200,87,200,84,201,82,204,81,208,80,211,79,214,77,218,75,221,81,222,86,221,91,221,96,221,105,221,112,220,114,219,116,213,117,212,118,209,119,204,123,203,124,199,126,198,127,197,132,196,135,197,140,202,147,201,150,207,156,213,160,213,167,210,174,206,178,204,181,201,188,200,192,198,195,197,200,196,201,196,206,198,213,203,217,210,218,216,225,216,230,214,235,213,235,209,238,207,238,205,237,202,235,202,233,200,234,197,239,196,241,193,241,191,240,188,239,186,242,183,245,181,245,176,240,176,238,175,238,171,237," id="mrg1" href="#" alt="Link" title="Region 1"/>
							<area shape="poly" coords="224,90,225,89,228,87,228,85,234,89,239,91,244,94,250,100,250,105,249,109,248,110,247,111,245,112,243,116,242,117,242,124,247,131,254,138,250,137,259,143,258,148,255,150,254,157,254,162,254,167,254,172,252,178,250,179,246,180,239,187,238,188,236,191,235,191,228,192,225,193,222,195,220,195,218,196,216,202,214,207,213,210,210,213,209,214,207,215,203,215,202,215,200,214,198,213,197,210,195,207,195,203,195,201,195,197,197,194,199,193,202,190,202,188,203,184,203,181,204,179,208,177,210,176,213,171,214,166,214,164,214,161,214,160,213,160,210,161,207,161,205,154,203,151,202,151,200,151,199,151,200,144,201,142,199,141,195,142,196,136,198,132,200,129,202,125,204,122,208,119,212,117,216,116,218,115,220,112,220,109,221,104,223,100,223,97,223,93," id="mcar" href="#" alt="Link" title="CAR"/>
							<area shape="poly" coords="223,90,226,86,230,85,235,89,241,92,246,95,250,104,249,106,248,112,247,113,245,115,244,119,242,121,247,127,248,132,255,139,257,148,255,153,252,159,252,168,252,175,251,177,250,178,245,181,243,181,242,185,240,187,236,189,231,190,227,192,221,193,218,194,217,195,216,201,215,204,214,206,213,207,211,208,209,212,212,218,218,221,223,222,226,221,231,223,233,230,236,236,244,233,252,232,252,230,252,229,256,227,259,225,260,223,262,222,265,219,267,216,268,215,269,214,273,210,274,207,278,204,281,200,283,199,288,197,293,197,295,196,299,190,300,186,301,179,304,174,306,170,308,166,306,164,303,163,303,160,303,154,300,152,297,151,295,150,293,145,292,142,291,139,290,136,288,131,288,125,288,123,288,119,288,111,288,109,291,103,293,101,296,97,296,92,294,88,292,85,289,84,283,87,280,94,277,97,276,97,274,98,267,96,263,94,259,91,253,90,250,88,246,85,239,83,231,81,229,79,227,78,224,79,224,85," id="mrg2" href="#" alt="Link" title="Region 2"/>
							<area shape="poly" coords="201,317,195,317,193,314,189,312,186,309,185,308,187,305,183,302,183,298,184,294,181,293,178,296,173,298,171,294,172,291,170,286,170,278,170,272,169,269,166,262,163,260,162,258,165,255,165,254,165,251,164,249,163,247,162,245,161,244,162,239,165,237,171,236,178,243,183,246,187,245,190,242,196,241,198,240,199,239,205,238,210,238,216,234,217,232,217,228,217,225,219,224,221,222,229,224,233,230,237,238,243,238,246,236,248,233,252,228,254,226,258,222,259,221,261,220,263,219,265,217,267,215,271,212,275,211,275,208,277,206,279,202,280,198,287,197,291,204,289,209,283,212,281,216,279,218,276,221,273,222,270,223,266,227,262,227,261,229,257,232,254,236,257,243,253,252,251,255,248,260,246,264,245,269,244,273,243,279,243,286,242,288,240,291,238,293,235,294,231,294,228,294,224,295,219,297,217,299,215,299,211,297,205,295,202,294,201,294,200,298,199,300,199,305,201,313," id="mrg3" href="#" alt="Link" title="Region 3"/>
							<area shape="poly" coords="220,298,223,296,228,296,231,301,230,307,230,312,229,314,228,318,227,319,226,319,225,319,223,318,222,315,222,313,222,311,222,310,220,307,220,305,219,304," id="mncr" href="#" alt="Link" title="NCR"/>
							<area shape="poly" coords="226,362,226,358,224,354,221,356,219,358,217,358,214,354,214,352,213,350,212,347,212,345,204,347,200,350,199,350,198,345,199,340,200,332,201,327,204,325,207,323,209,321,214,318,219,314,224,317,228,322,234,326,241,327,248,322,248,320,246,320,243,322,240,319,240,316,240,314,238,313,235,315,233,313,231,312,231,309,231,306,232,305,232,301,232,298,231,296,232,294,237,292,243,288,243,283,243,281,245,277,247,274,248,272,252,277,258,280,265,280,271,279,279,279,279,284,281,289,288,290,293,293,301,297,299,302,294,302,289,301,287,298,282,298,281,302,280,304,276,305,276,310,273,316,279,321,286,326,291,328,296,333,301,333,307,332,312,335,317,336,313,340,310,343,306,344,305,350,305,355,310,362,315,369,317,374,317,380,316,382,315,386,311,388,308,387,307,383,306,379,305,376,304,372,301,368,299,365,293,363,287,362,285,360,283,356,279,352,275,349,271,346,268,344,263,344,255,348,254,348,253,349,252,351,248,352,247,355,246,358,243,361,240,361,233,362," id="mrg4a" href="#" alt="Link" title="Region 4a"/>
							<area shape="poly" coords="189,350,186,350,183,349,180,349,175,348,175,353,179,358,185,364,186,369,183,371,187,376,190,383,189,388,186,392,183,397,181,403,180,404,177,408,175,411,174,414,171,418,167,425,166,426,164,428,162,433,161,434,161,442,163,451,161,457,160,459,159,461,156,462,153,464,151,468,148,470,147,476,144,477,143,479,140,482,139,484,137,491,135,494,134,498,133,504,132,506,128,509,128,518,129,526,127,533,125,538,120,542,119,542,117,542,116,544,114,545,110,550,107,553,104,555,101,557,99,559,97,560,95,562,92,564,91,567,89,570,88,576,87,576,83,579,82,581,79,583,75,588,73,590,69,595,67,598,63,600,62,602,60,603,58,602,55,602,49,605,48,606,47,608,45,610,43,612,39,614,35,619,34,621,29,627,24,630,22,634,20,638,19,643,16,648,15,650,11,656,3,663,3,668,3,673,5,683,10,680,15,678,16,674,18,672,19,667,25,661,28,652,31,647,36,643,39,640,41,638,47,634,51,632,54,629,59,624,62,621,64,619,68,616,71,613,73,611,79,606,85,601,88,600,90,597,93,594,97,589,100,584,102,581,104,577,104,574,104,572,103,568,104,565,109,564,113,562,118,559,125,558,128,557,132,552,132,548,135,544,142,540,147,540,154,536,166,536,170,532,170,530,167,528,162,526,161,525,157,526,155,526,153,526,149,523,149,520,148,517,149,512,149,510,148,510,147,509,150,504,150,501,147,497,147,494,151,491,154,488,158,487,161,483,163,480,167,476,171,472,172,466,173,462,174,458,177,454,180,452,187,450,188,448,193,445,205,440,206,439,209,437,211,436,215,434,223,434,229,435,235,437,242,436,245,434,248,433,249,429,250,427,250,425,254,422,261,422,267,425,272,433,276,439,281,442,283,437,286,434,291,432,297,431,303,431,310,434,315,434,319,429,317,424,314,421,310,420,304,420,300,421,297,420,295,417,295,416,196,354,297,413,295,413,291,412,289,409,287,405,287,401,287,400,290,391,291,387,290,383,289,381,288,376,288,371,286,368,282,367,277,366,274,365,269,365,263,367,262,368,261,369,258,371,252,374,250,374,247,375,245,375,241,374,237,371,226,369,225,369,222,368,219,366,218,366,212,368,208,368,206,366,205,365,201,362,200,360,198,359,195,356," id="mrg4b" href="#" alt="Link" title="Region 4b"/>
							<area shape="poly" coords="298,336,295,336,295,334,295,333,297,327,299,323,303,321,313,323,319,323,324,326,330,332,335,338,335,343,333,347,339,350,344,352,349,351,350,346,346,344,345,341,348,338,353,338,361,342,371,346,378,349,384,350,392,350,393,347,393,339,395,335,403,340,406,345,411,351,408,359,407,361,395,364,391,364,385,361,382,359,376,360,369,360,365,360,363,364,369,370,371,377,373,382,373,388,383,389,391,391,396,395,396,400,396,405,396,410,393,415,393,420,391,423,389,426,387,435,387,440,387,447,389,454,391,460,385,464,380,458,377,456,372,456,365,450,365,448,363,444,359,442,357,444,355,450,348,454,345,456,341,457,338,457,339,448,341,445,343,440,344,435,345,432,346,422,345,420,345,413,345,408,343,405,339,401,335,396,329,396,325,392,329,388,333,386,337,384,343,384,345,382,342,376,336,374,330,370,323,364,322,362,322,360,323,358,325,354,324,352,321,352,317,352,311,347,312,342,315,341,317,337,315,336,309,333,306,333," id="mrg5" href="#" alt="Link" title="Region 5"/>
							<area shape="poly" coords="349,542,347,542,343,542,341,543,341,549,341,555,336,556,332,560,331,568,330,568,326,572,321,578,319,580,317,582,313,585,312,589,311,589,308,590,303,586,301,579,298,576,299,568,304,563,308,562,317,562,317,560,319,558,320,549,323,547,323,545,322,543,319,540,317,540,314,540,310,540,303,540,303,534,305,531,304,528,301,527,297,527,293,527,290,528,288,528,281,533,279,535,276,538,273,539,271,536,271,529,274,527,277,520,280,515,280,512,280,508,280,504,280,502,280,495,281,488,281,486,282,480,282,475,282,472,282,468,277,466,273,464,272,460,274,456,283,460,291,465,296,467,305,474,311,475,316,475,325,474,327,481,337,483,343,479,342,486,340,491,336,495,335,496,332,498,332,503,335,508,341,509,354,509,360,512,362,518,359,524,357,526,355,532,353,534," id="mrg6"  href="#" alt="Link" title="Region 6"/>
							<area shape="poly" coords="408,511,407,508,408,503,409,501,408,498,407,494,402,488,402,483,402,479,404,477,412,479,416,486,423,488,428,488,431,487,433,480,437,475,439,472,440,470,440,468,440,464,436,464,432,464,430,460,425,455,424,452,423,452,417,448,413,447,408,443,408,440,406,436,401,427,402,423,404,422,408,420,415,420,420,422,430,422,440,421,448,419,455,423,458,434,465,436,472,445,468,451,467,454,466,459,469,468,471,475,473,483,475,492,483,499,483,505,479,509,476,504,469,502,463,503,457,503,453,502,451,500,448,495,444,495,441,496,440,506,442,514,443,519,445,525,449,530,453,536,456,543,454,546,443,553,445,546,444,559,439,556,437,556,433,555,431,554,428,546,428,544,429,541,428,535,432,526,431,523,429,519,426,514,425,511,422,508,417,507," id="mrg8" href="#" alt="Link" title="Region 8"/>
							<area shape="poly" coords="312,594,314,593,316,586,321,584,323,582,325,581,325,577,327,575,328,574,331,569,333,564,335,563,335,558,339,556,339,552,341,548,341,544,343,541,349,541,350,546,348,550,348,555,346,560,347,565,353,565,354,560,355,557,357,554,360,550,363,546,366,542,368,537,369,534,371,532,372,529,373,527,377,521,379,517,382,510,382,509,381,500,381,496,384,492,391,492,389,496,389,503,387,508,390,516,387,530,389,536,386,538,389,547,397,550,404,550,409,550,417,554,421,562,421,567,418,574,417,578,415,578,410,581,406,584,401,584,397,584,392,585,386,586,382,585,381,582,379,578,375,577,373,577,366,578,364,578,363,583,361,587,359,588,357,591,354,593,352,596,351,602,346,608,342,612,336,614,333,614,327,614,327,610,325,604,325,602,324,602,320,597," id="mrg7" href="#" alt="Link" title="Region 8"/>
							<area shape="poly" coords="364,642,364,648,364,655,365,663,364,666,366,673,369,678,363,682,360,683,357,684,356,686,357,691,354,696,353,696,356,702,355,707,348,704,347,700,343,699,340,700,338,701,340,696,340,694,337,692,336,691,331,698,331,704,330,704,325,708,323,710,320,708,321,700,320,698,320,694,320,690,319,687,314,687,307,689,302,694,301,701,297,704,296,710,294,713,291,715,289,721,288,724,288,729,282,732,280,737,279,736,277,732,275,729,274,726,273,723,273,716,275,715,278,712,280,708,280,706,281,701,282,695,283,691,283,688,286,681,288,674,289,671,295,670,298,669,304,669,310,668,316,667,325,666,330,664,334,659,334,657,331,650,331,646,338,644,343,644,352,643,353,642,355,639,364,640," id="mrg9" href="#" alt="Link" title="Region 9"/>
							<area shape="poly" coords="368,683,368,679,368,677,367,674,363,670,362,670,362,666,363,657,363,653,363,648,364,639,370,640,376,642,377,648,378,653,378,660,387,662,396,663,399,661,401,656,403,652,404,648,405,646,408,642,411,641,418,644,423,644,429,642,429,638,432,633,432,628,432,621,431,620,437,618,445,624,451,627,453,625,453,620,457,632,456,641,456,649,460,658,463,664,465,669,465,680,466,686,465,691,463,693,458,693,456,695,454,700,451,701,443,706,440,705,436,705,435,704,433,702,432,699,432,695,429,689,425,685,422,682,421,679,420,675,418,671,416,669,413,667,410,665,409,663,407,664,405,663,404,663,402,667,401,669,400,671,397,672,394,674,392,675,389,678,387,679,387,685,386,686,384,687,381,687,378,688,375,688,374,688," id="mrg10" href="#" alt="Link" title="Region 10"/>
							<area shape="poly" coords="520,673,517,673,515,672,512,672,508,672,504,673,503,676,501,676,496,675,493,674,490,674,485,674,479,676,476,676,471,676,467,677,465,677,462,672,462,669,460,664,458,659,458,657,456,653,454,647,454,643,454,640,454,631,454,628,454,623,454,622,456,619,461,618,466,618,469,616,469,612,468,606,467,602,465,597,464,591,463,586,462,583,464,578,466,576,470,572,471,570,473,567,473,565,470,561,467,558,467,556,469,550,469,544,469,542,475,538,481,540,478,544,478,552,478,559,479,566,484,566,490,565,495,562,503,562,503,567,505,574,502,578,499,579,495,582,494,587,493,590,495,595,499,600,505,603,508,612,511,619,513,625,509,631,505,637,504,638,503,642,509,644,517,644,515,649,514,652,512,658,519,661,521,667," id="mrg13" href="#" alt="Link" title="Region 13"/>
							<area shape="poly" coords="466,676,473,676,481,676,488,676,496,676,501,676,505,675,510,675,513,674,519,684,526,690,527,699,527,704,529,710,528,713,528,718,524,722,519,725,515,729,512,731,509,732,506,734,507,742,508,748,507,752,505,760,504,763,501,757,500,752,498,749,498,746,498,742,501,739,499,737,496,735,493,733,493,729,493,726,493,724,491,722,489,720,489,716,489,713,488,711,488,710,485,710,482,713,480,715,476,718,475,720,476,725,473,727,470,729,469,734,465,738,464,741,465,746,464,751,471,754,476,759,477,765,479,773,480,778,478,783,478,789,477,792,476,793,472,797,469,800,461,807,462,803,464,800,466,796,467,790,468,785,468,781,469,775,469,772,468,768,467,765,465,758,465,756,462,756,455,758,452,756,452,754,452,750,452,747,449,744,449,738,449,733,450,729,453,726,457,725,457,721,456,715,455,710,455,705,455,700,455,697,457,695,462,694,463,693,467,691,468,687,468,684,467,682," id="mrg11" href="#" alt="Link" title="Region 11"/>
							<area shape="poly" coords="464,802,464,796,467,794,467,791,467,788,467,784,468,779,468,776,468,774,468,770,468,768,464,764,464,759,464,756,462,755,457,756,454,757,451,756,451,753,451,750,449,744,451,739,453,735,455,732,457,727,458,726,456,722,455,718,456,711,457,704,455,699,454,698,451,701,445,704,441,704,438,704,436,704,432,704,432,700,431,696,424,696,419,696,415,694,412,694,411,700,411,709,408,713,407,716,406,719,413,717,414,723,420,729,423,724,423,722,425,719,431,720,430,722,433,728,433,735,443,742,437,748,435,749,431,750,428,750,427,746,427,744,424,743,421,740,421,738,418,738,416,743,411,744,409,744,399,746,393,746,391,746,389,751,389,757,392,763,400,770,405,773,410,778,419,782,426,784,432,786,437,789,443,789,446,785,447,779,450,778,453,777,456,782,455,787,454,788,454,794,459,801," id="mrg12" href="#" alt="Link" title="Region 12"/>
							<area shape="poly" coords="396,744,403,744,409,744,416,743,419,741,420,739,421,737,422,736,425,742,433,746,439,746,440,743,441,742,437,739,434,737,433,734,433,730,433,728,433,722,431,719,429,718,428,720,426,723,425,726,424,730,421,728,419,727,417,726,413,723,413,720,415,718,414,716,410,716,409,716,405,718,407,714,411,712,412,708,413,705,413,700,413,696,413,690,419,690,424,693,429,692,429,689,426,683,422,678,420,673,418,669,417,668,415,666,411,664,407,662,403,662,401,664,395,671,394,672,392,673,390,678,389,678,387,681,386,687,384,688,382,688,379,688,376,688,372,696,369,698,368,700,367,700,363,708,362,710,358,712,350,714,345,716,339,719,337,721,331,723,329,724,325,726,316,729,312,731,304,736,300,738,295,740,292,740,287,741,283,742,281,742,279,742,276,742,271,743,268,747,263,747,262,749,259,749,252,752,250,755,249,756,245,758,240,762,236,765,234,766,232,768,227,772,225,774,221,778,211,781,212,787,209,790,205,793,203,794,195,798,192,801,191,802,188,804,183,808,181,810,177,812,171,817,169,819,167,822,163,825,162,826,158,829,156,833,167,833,174,832,179,829,183,827,183,824,190,823,198,819,200,818,206,815,210,814,213,811,225,806,230,798,232,797,234,794,240,791,244,788,249,785,252,783,253,779,252,775,255,769,262,766,267,763,270,762,279,762,285,760,289,757,292,753,294,751,297,750,304,747,311,745,327,741,335,741,350,742,360,743,368,744,378,744,383,744,385,743," id="marmm" href="#" alt="Link" title="ARMM"/>							
							</map>
						</div>
					</td>
					<td></td>
				</tr>				
			</table>
			
			<div class="row" align="center" id='gr1' style="opacity:0;" hidden>
				<div class="three columns" id="rg1" style="opacity:0;">
					<div class="sr1 alert">						
						<p style="font-size:18px;" id='lblfrg1'>Region 1</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg1"/>
					</div>
				</div>
				<div class="three columns" id="rg2" style="opacity:0;">
					<div class="sr2 alert">						
						<p style="font-size:18px;" id='lblfrg2'>Region 2</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg2"/>
					</div>
				</div>
				<div class="three columns" id="rg3" style="opacity:0;">
					<div class="sr3 alert">
						<p style="font-size:18px;" id='lblfrg3'>Region 3</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg3"/>
					</div>
				</div>
					<div class="three columns" id="car" style="opacity:0;">
					<div class="srcar alert">
						<p style="font-size:18px;" id='lblfcar'>CAR</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg4"/>
					</div>
				</div>
			</div>
			<div class="row" align="center" id='gr2' style="opacity:0;" hidden>
				<div class="twelve columns" id="ncr" style="opacity:0;">
					<div class="srncr alert">
						<p style="font-size:18px;" id='lblfncr'>NCR</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg5"/>
					</div>
				</div>			
			</div>
			<div class="row" align="center" id='gr3' style="opacity:0;" hidden>
				<div class="three columns" id="rg4a" style="opacity:0;">
					<div class="sr4 alert">
						<p style="font-size:18px;" id='lblfrg4a'>Region 4A</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg6"/>
					</div>
				</div>
				<div class="three columns" id="rg4b" style="opacity:0;">
					<div class="sr4 alert">
						<p style="font-size:18px;" id='lblfrg4b'>Region 4B</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg7"/>
					</div>
				</div>
				<div class="three columns" id="rg5" style="opacity:0;">
					<div class="sr5 alert">
						<p style="font-size:18px;" id='lblfrg5'>Region 5</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg8"/>
					</div>
				</div>
				<div class="three columns" id="rg6" style="opacity:0;">
					<div class="sr6 alert">
						<p style="font-size:18px;" id='lblfrg6'>Region 6</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg9"/>
					</div>
				</div>
			</div>
			
			<div class="row" align="center" id='gr4' style="opacity:0;" hidden>
				<div class="three columns" id="rg7" style="opacity:0;">
					<div class="sr7 alert">
						<p style="font-size:18px;" id='lblfrg7'>Region 7</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg10"/>
					</div>
				</div>
				<div class="three columns" id="rg8" style="opacity:0;">
					<div class="sr8 alert">
						<p style="font-size:18px;" id='lblfrg8'>Region 8</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg11"/>
					</div>
				</div>
				<div class="three columns" id="rg9" style="opacity:0;">
					<div class="sr9 alert">
						<p style="font-size:18px;" id='lblfrg9'>Region 9</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg12"/>
					</div>
				</div>
				<div class="three columns" id="rg10" style="opacity:0;">
					<div class="sr10 alert">
						<p style="font-size:18px;" id='lblfrg10'>Region 10</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg13"/>
					</div>
				</div>
			</div>	
			
			<div class="row" align="center" id='gr5' style="opacity:0;" hidden>
				<div class="three columns" id="rg11" style="opacity:0;">
					<div class="sr11 alert">
						<p style="font-size:18px;" id='lblfrg11'>Region 11</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg14"/>
					</div>
				</div>
				<div class="three columns" id="rg12" style="opacity:0;">
					<div class="sr12 alert">
						<p style="font-size:18px;" id='lblfrg12'>Region 12</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg15"/>
					</div>
				</div>
				<div class="three columns" id="rg13" style="opacity:0;">
					<div class="sr13 alert">
						<p style="font-size:18px;" id='lblfrg13'>Region 13</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg16"/>
					</div>
				</div>
				<div class="three columns" id="armm" style="opacity:0;">
					<div class="srarmm alert">
						<p style="font-size:18px;" id='lblfarmm'>ARMM</p>
						<img src="img/ajax-loader.gif" style="width:44px;" id="ldcreg17"/>
					</div>
				</div>
				<div class="pretty medium success btn" style="width:100%; margin-top:20px;" ><a href="" class="switch" gumby-trigger="#md1">View Graph</a></div>
				<div class="modal" id="md1" >
					<div class="content" style="width:90%; top:50px;" gumby-trigger="|#md1">
						<a class="close switch active" gumby-trigger="|#md1" style="color:#000000;"><i class="icon-cancel"></i></a>
						<div id="piechart" style="width: 900px; height: 500px;"></div>						
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
			<div class="row">
				<div class="twelve columns" id="rge1">
					<section class="vertical tabs">
						<ul class="tab-nav four columns">							
							<li><a href="#" id="tnrg1" ><div class="alignleft">Region 1</div></a></li>
							<li><a href="#" id="tnrg2"><div class="alignleft">Region 2</div></a></li>
							<li><a href="#" id="tnrg3"><div class="alignleft">Region 3</div></a></li>
							<li><a href="#" id="tncar"><div class="alignleft">CAR</div></a></li>
							<li><a href="#" id="tnncr"><div class="alignleft">NCR</div></a></li>
							<li><a href="#" id="tnrg4a"><div class="alignleft">Region 4a</div></a></li>
							<li><a href="#" id="tnrg4b"><div class="alignleft">Region 4b</div></a></li>
							<li><a href="#" id="tnrg5"><div class="alignleft">Region 5</div></a></li>
							<li><a href="#" id="tnrg6"><div class="alignleft">Region 6</div></a></li>
							<li><a href="#" id="tnrg7"><div class="alignleft">Region 7</div></a></li>
							<li><a href="#" id="tnrg8"><div class="alignleft">Region 8</div></a></li>
							<li><a href="#" id="tnrg9"><div class="alignleft">Region 9</div></a></li>
							<li><a href="#" id="tnrg10"><div class="alignleft">Region 10</div></a></li>
							<li><a href="#" id="tnrg11"><div class="alignleft">Region 11</div></a></li>
							<li><a href="#" id="tnrg12"><div class="alignleft">Region 12</div></a></li>
							<li><a href="#" id="tnrg13"><div class="alignleft">Region 13</div></a></li>
							<li><a href="#" id="tnarmm"><div class="alignleft">ARMM</div></a></li>
						</ul>
						<div class="tab-content eight columns" id="trg1"></div>
						<div class="tab-content eight columns" id="trg2"></div>
						<div class="tab-content eight columns" id="trg3"></div>
						<div class="tab-content eight columns active" id="tcar"></div>
						<div class="tab-content eight columns" id="tncr"></div>
						<div class="tab-content eight columns" id="trg4a"></div>
						<div class="tab-content eight columns active" id="trg4b"></div>
						<div class="tab-content eight columns" id="trg5"></div>
						<div class="tab-content eight columns" id="trg6"></div>
						<div class="tab-content eight columns active" id="trg7"></div>
						<div class="tab-content eight columns" id="trg8"></div>
						<div class="tab-content eight columns" id="trg9"></div>
						<div class="tab-content eight columns active" id="trg10"></div>
						<div class="tab-content eight columns" id="trg11"></div>
						<div class="tab-content eight columns" id="trg12"></div>
						<div class="tab-content eight columns active" id="trg13"></div>
						<div class="tab-content eight columns" id="tarmm"></div>
					</section>
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