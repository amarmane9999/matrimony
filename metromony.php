<?php
	include_once("dbconn.php");
	$metr="CREATE TABLE register (username varchar(10) PRIMARY KEY, 
									password VARCHAR(20),
									email VARCHAR(20),
									gender varchar(6), 
									age INT(2),
									address varchar(50),
									contact double)";
	mysqli_query($con,$metr);
	if(isset($_GET['uname']))
	{
		$uname=$_GET['uname'];
		$chkun="insert into register values('".$uname."','','','','','','')";
		if(!mysqli_query($con,$chkun))
			echo "true";
		else
		{
			$del="DELETE FROM `register` WHERE `register`.`username`='".$uname."'";
			mysqli_query($con,$del);
			echo "false";
		}
	}
	if(isset($_POST['sub']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$addr=$_POST['addr'];
		$cont=$_POST['cont'];
		$insert="insert into register values('".$uname."','".$pass."','".$email."','".$gender."','".$age."','".$addr."','".$cont."')";
		if(mysqli_query($con,$insert))
		{
			echo "<h1 align='center'><font color='lightgreen' >Registration Successful</h1>";
			include("metromony.html");
		}
		else 
		{	
			echo "<h1 align='center'><font color='red'>Registration Failed</h1>";
			include("register.html");
		}
	}
	mysqli_close($con);
?>