<?php
include 'connectdb.php';
if (isset($_POST['register'])) {
    $name = $_POST['username'];
    $pass = md5($_POST['password']);
    $email_id = $_POST['email_id'];
    $mobile = $_POST['mobile'];
    $age = $_POST['age'];
    $address = $_POST['address'];


    $sql = "INSERT into login(username,password,email_id,mobile,age,address) values('$name','$pass','$email_id','$mobile','$age','$address')";
    if (mysqli_query($conn, $sql)) {
         header("location:login.php");
    }
     else {
        header("location:loginform.php?err=1");
    }

    mysqli_close($conn);
}// if (isset )
