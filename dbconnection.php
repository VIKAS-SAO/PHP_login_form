
<?php
 

$server='sql12.freemysqlhosting.net';
$username='sql12352003';
$password='2TzIPzeVUj';
$database="sql12352003";

$connection=mysqli_connect($server, $username,$password ,$database );

if($connection){
 }
else{
	// echo "not successful".mysqli_error($connection);
	 die($connection);
}
 



?>