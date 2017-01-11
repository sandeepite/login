<?php
include("config.php");
include_once 'session.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Add Project</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
           

    </head>
    <body>
        <?php include 'nav.php'; ?>	

        <div class="container">
           <div class="row">
               <div class="col-sm-3"><h5>Add Project Details</h5></div>
           </div>
                                    
       

        <br />
        <form method="post" action="add_scripts.php" enctype="multipart/form-data">
            <strong>Project Name</strong> <input type="text" name="project_name" id="content" class="form-control" required><br>
            <strong>Project Category</strong> <input type="text" name="project_cat" id="content" class="form-control" required><br>
            <strong>Project client</strong> <input type="text" name="project_client" id="content" class="form-control" required><br>
            <strong>Project start date</strong> <input type="date" name="project_start_date" id="content" class="form-control" required><br>
            <strong>completed date</strong> <input type="date" name="project_com_date" id="content" class="form-control" required><br>
            <strong>project assign to</strong> <input type="text" name="project_assign" id="content" class="form-control" required><br>
            <strong>project image1</strong><input type="file" name="image" id="fileToUpload"><br>
            <strong>project image2</strong><input type="file" name="image1" id="fileToUpload">

            <hr>

            <input type="submit" name="addsubmit" value="Add Project" class="btn btn-info">
        </form>
    </div>


<br><br>


</body>
</html>
