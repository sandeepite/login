<?php include("config.php"); 
include('session.php');
if(isset($_REQUEST["id"])) {
$id=$_REQUEST["id"];	


$query ="delete from project where id='$id'";               
mysql_query($query);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
mysql_close($link); 
?>