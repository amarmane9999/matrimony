<html>
	<head>
		<style>
			fieldset{width:320;margin:auto;border-radius:30px;border-color:white}
	
			body{background:url(metr.jpg)}
			table{font-size:20;color:white;font:bold;font-family:Courier New }
			a{color:yellow}
			td{height:40}
			input{height:25;border-radius: 	5px}
			textarea{border-radius:5px}
			.btn{color:#ffffff;background:red;font-size:15; padding:1px10px 10px;border-radius:30px;}
		</style>
	</head>
<?php session_start();
if(isset($_COOKIE['uname'])){
	include_once("dbconn.php");
	$un=$_COOKIE['uname'];

	$select="select *from register where username='".$un."'";
	$qr=mysqli_query($con,$select);
	$row=mysqli_fetch_array($qr);
	
	$uname=$row['username'];
	$email=$row['email'];
	$gender=$row['gender'];
	$age=$row['age'];
	$add=$row['address'];
	$phone=$row['contact'];

	echo "<table cellpadding=15>
	<tr><th align='left'>User Name </th><td>:</td><td>".ucfirst($uname)."</td></tr>
	<tr><th align='left'>Email </th><td>:</td><td>".$email."</td></tr>
	<tr><th align='left'>Gender </th><td>:</td><td>".$gender."</td></tr>
	<tr><th align='left'>Age </th><td>:</td><td>".$age."</td></tr>
	<tr><th align='left'>Address </th><td>:</td><td>".$add."</td></tr>
	<tr><th align='left'>Mobile No.</th><td>:</td><td>".$phone."</td></tr>
	</table>
	";
	mysqli_close($con);
}
else{
	echo "<h1 align='center'><font color='white'>Please Login</font>";
	include("login.php");
}
?>
</html>