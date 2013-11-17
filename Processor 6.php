<?php
header('Access-control-Allow-origin:*');

	$tng=$_POST['tng'];
								
	mysql_connect("localhost", "gcccsorg", "3ec9JBxc13")or die("cannot connect"); 
	mysql_select_db("gcccsorg_ibantay")or die("cannot select DB");	
	$tbs="SELECT * FROM tblsubproj WHERE projloc LIKE '%".$tng."%'";
	$tbsq=mysql_query($tbs);
	$tbsr=mysql_num_rows($tbsq);
										
	?><div class="alignright">(<?php echo $tbsr; ?>)</div><?php
																
?>