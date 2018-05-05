<?php
session_start();
if(isset($_COOKIE['uname'])){
$nm=$_COOKIE['uname'];
setcookie('uname','',time(-1));
}
session_destroy();
echo "<h1 align='center'><font color='white'>Logout Successfull</font>";

include("metromony.html");

?>