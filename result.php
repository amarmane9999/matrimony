<html>
	<head>
		<style>
			fieldset{width:320;margin:auto;border-radius:30px;border-color:white}
		
			body{background:url(metr.jpg)}
			table{font-size:20;color:white;font:bold;font-family:Courier New }
			th{font-size:20;color:white;font:bold;font-family:Courier New }
			a{color:yellow}
			td{height:40}
			input{height:25;border-radius: 	5px}
			textarea{border-radius:5px}
			.btn{color:#ffffff;background:red;font-size:15; padding:1px10px 10px;border-radius:30px;}
		</style>
	</head>
<?php session_start();


	

	if(isset($_GET['search']))
	{
		require_once("dbconn.php");
		$gender=$_GET['gender'];
		$min=$_GET['min'];
		$max=$_GET['max'];
		$un="select * from register where Gender='".$gender."' && Age>='".$min."' && Age<='".$max."'";
		$qu=mysqli_query($con,$un);
		//for($i=0;$i<count($row);$i++)
			
		echo "<table cellpadding=15 border=1 cellspacing=0>
			<tr><th>Name</th><th>Email</th><th>Gender</th><th>Age</th><th>Address</th><th>Mobile No.</th></tr>";
		while($row = mysqli_fetch_array($qu))
		{
			$uname=$row['username'];
			$email=$row['email'];
			$gender=$row['gender'];
			$age=$row['age'];
			$add=$row['address'];
			$phone=$row['contact'];
	
			echo "<tr><th>".$uname."</th><th>".$email."</th><th>".$gender."</th><th>".$age."</th><th>".$add."</th><th>".$phone."</th></tr>";
		}
		echo "</table>";
		
	}
	else{require_once("metromony.html");}
	
mysqli_close($con);

?>
</html>