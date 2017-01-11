<?php

session_start();
include 'connectdb.php';
$username = $_REQUEST["username"];
$password = md5($_REQUEST["password"]);

$s = "SELECT * FROM `login` WHERE username='$username' and password='$password'";

$result = mysqli_query($conn, $s);

$count = mysqli_num_rows($result);
if ($count == 1) {
    $_SESSION["login"] = "1";
    $_SESSION['username'] = $username;
    header("location:index.php");
} else {
    header("location:login.php?err=1");
}
?>