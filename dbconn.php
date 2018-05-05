<?php
$con=mysqli_connect('localhost','root','root')or die("Could not Connect to mysql".mysqli_connect_error());
$co=mysqli_query($con,"create database metromony");
$conn=mysqli_query($con,"use metromony");
?>