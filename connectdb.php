<?php
$username = "root";
$password = "sandeep";
$hostname = "localhost";
$dbname = 'project_test';
// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$path="up_images/";
$path0="up_images/";
$rand1=rand(1, 100);

?>
