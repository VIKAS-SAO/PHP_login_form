
<?php
include 'dbconnection.php'; 
session_start();


if(isset($_SESSION['username'])){
	session_unset();
	session_destroy(); 
	echo "<script> location.href='index.php' </script>";
 }

 
else{
	echo "<script> location.href='index.php' </script>";
}
 
 


mysqli_close($connection); 





?>