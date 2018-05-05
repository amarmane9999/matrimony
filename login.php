<html>
	<head>
		<style>
			fieldset{width:320;margin:auto;border-radius:30px;border-color:white}
			legend{font-size:20}
			body{background:url(metr.jpg)}
			table{color:white;font:bold}
			a{color:yellow}
			td{height:40}
			input{height:25;border-radius: 	5px}
			textarea{border-radius:5px}
			.btn{color:#ffffff;background:red;font-size:15; padding:1px10px 10px;border-radius:30px;}
		<style>
	</head>
<?php 
	require_once("dbconn.php");
	

	if(isset($_POST['login']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$un="select * from register where username='".$uname."'";
		
		$qu=mysqli_query($con,$un);
		$row = mysqli_fetch_array($qu);


		$dname = $row['username'];
		$dpass = $row['password'];
		
		
		if($uname==$dname && $pass==$dpass)
		{
			setcookie("uname",$uname);
			session_start();
			$_SESSION['uname']=$_POST['uname'];
			header("location:main.php");
		}
		else{ 
			echo "<h1 align='center'><font color='red'>Login Failed";
			require_once("metromony.html");
		}
  
	}
	else{require_once("metromony.html");}
	
mysqli_close($con);
?>




</html>