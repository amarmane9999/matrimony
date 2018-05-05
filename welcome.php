<html>

	<head>
		<style>
			fieldset{width:320;margin:auto;border-radius:30px;border-color:white}
			legend{font-size:20}
			body{background:url(metr.jpg);font-family:Courier New }
			table{color:white}
			a{color:yellow}
			td{height:40}
			input{height:25;border-radius: 	5px}
			textarea{border-radius:5px}
			.btn{color:#ffffff;background:red;font-size:15; padding:1px10px 10px;border-radius:30px;}
		</style>
	</head>
<?php
session_start();
	$sname=$_SESSION['uname'];
	echo "<h1><div><font color='white'>Welcome, ".ucfirst($sname)."</font>";
	echo "<div align='right'><a href='logout.php' target='window.close()' style='align:right'><input class='btn'  type='button' value='Log Out'></a>";
?>
</html>