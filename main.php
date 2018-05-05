<html>
	<head>
		<style>
			frameset{border-color:'url metr.jpg'}
		</style>
	</head>
<?php session_start();	

if(isset($_SESSION['uname']))
{
	echo "<frameset rows='14%,*' bordercolor='darkred'>
		<frame src='welcome.php' name='name' noresize ></frame>
		<frameset cols='18%,*' bordercolor='darkred'>
					<frame src='menu.html' noresize > </frame>
					<frame src='profile.php' name='display' noresize ></frame>
				
		</frameset>
	</frameset>";
}else{
	
	echo "<h1 align='center'><font color='white'>Please Login</font>";
	include("login.php");
}
?>	
</html>