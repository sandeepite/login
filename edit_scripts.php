<?php

include("config.php");
include_once 'session.php';
if (isset($_REQUEST['submit'])) {
     $project_name = $_REQUEST['project_name'];
     $project_cat = $_REQUEST['project_cat'];
     $project_client = $_REQUEST['project_client'];
     $project_start_date = $_REQUEST['project_start_date'];
     $project_com_date =$_REQUEST['project_com_date'];
     $project_assign = $_REQUEST['project_assign'];
   
    $id = clean($_REQUEST['id']);


    $rand1 = rand(1, 100);

    if ($_FILES["image"]["name"] != '') {
        if (($_FILES["image"]["type"] == "image/gif") || ($_FILES["image"]["type"] == "image/jpeg") || ($_FILES["image"]["type"] == "image/pjpeg") || ($_FILES["image"]["type"] == "image/X-PNG") || ($_FILES["image"]["type"] == "image/PNG") || ($_FILES["image"]["type"] == "image/png") || ($_FILES["image"]["type"] == "image/x-png")) {
            $image = "$path" . $rand1 . $_FILES["image"]["name"];
            $image0 = "$path0" . $rand1 . $_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"], $image);
        } else {
            $image0 = '';
        }
    } else {
        $image0 = $_REQUEST['old_image'];
    }
    //image2
    if ($_FILES["image1"]["name"] != '') {
        if (($_FILES["image1"]["type"] == "image/gif") || ($_FILES["image1"]["type"] == "image/jpeg") || ($_FILES["image1"]["type"] == "image/pjpeg") || ($_FILES["image1"]["type"] == "image/X-PNG") || ($_FILES["image1"]["type"] == "image/PNG") || ($_FILES["image1"]["type"] == "image/png") || ($_FILES["image1"]["type"] == "image/x-png")) {
            $image1 = "$path" . $rand1 . $_FILES["image1"]["name"];
            $image01 = "$path0" . $rand1 . $_FILES["image1"]["name"];
            move_uploaded_file($_FILES["image1"]["tmp_name"], $image1);
        } else {
            $image01 = '';
        }
    } else {
        $image01 = $_REQUEST['old_image1'];
    }




    
        $query = "UPDATE project SET banner_images='$image0', banner_images1='$image01', project_name='$project_name', project_cat='$project_cat', project_client='$project_client', project_start_date='$project_start_date', project_com_date='$project_com_date', project_assign='$project_assign' WHERE id=$id";
        mysql_query($query);

        $errmsg_arr = array();
        $errflag = false;
        $errmsg_arr[] = 'Success: You have updated new details.';
        $errflag = true;
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        header("location:view.php");
    
} 


mysql_close($link);
?>