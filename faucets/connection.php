<?php 
$conn=mysqli_connect("51.79.18.138","freeper1_admin","AmritaMowna@98","freeper1_admin");
 // $conn=mysqli_connect("localhost","root","","freeperfectmoney");
if(!$conn)
{
// 	echo mysqli_error($conn);
	die("**** Server Maintenance *****" . $conn->connect_error);
}

?>