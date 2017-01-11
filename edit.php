<?php
include("config.php");
include_once 'session.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $sql = "select * from project WHERE id=$id";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Update projects</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

        <body>
            <?php include 'nav.php'; ?>	
           
        
            <div class="container">
                <div class="row">
               <div class="col-sm-3"><h5>Update Project</h5></div>
           </div>

                <!-- about us slider -->
                <div id="about-slider">
                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators visible-xs">
                            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-slider" data-slide-to="1"></li>
                            <li data-target="#carousel-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="back-button">

                                    </div>
                                    <br>

                                    <form action="edit_scripts.php" name="form" method="post" enctype="multipart/form-data">

                                        <strong>Project Name </strong><input type="text" name="project_name" id="content" class="form-control" value="<?php echo $row['project_name']; ?>" required><br>
                                        <strong>Project Category</strong> <input type="text" name="project_cat" id="content" class="form-control" value="<?php echo $row['project_cat']; ?>" required><br>
                                        <strong>Project client</strong> <input type="text" name="project_client" id="content" class="form-control" value="<?php echo $row['project_client']; ?>" required><br>
                                        <strong>Project start date </strong><input type="text" name="project_start_date" id="content" class="form-control" value="<?php echo $row['project_start_date']; ?>" required><br>
                                        <strong>completed date </strong><input type="text" name="project_com_date" id="content" class="form-control" value="<?php echo $row['project_com_date']; ?>" required><br>
                                        <strong>project assign to</strong> <input type="text" name="project_assign" id="content" class="form-control" value="<?php echo $row['project_assign']; ?>" required><br>
                                        <strong>project image1</strong> <input type="file" name="image">
                                        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="old_image" id="old_image" class="form-control" value="<?php echo $row['banner_images']; ?>">
                                        <?php if ($row['banner_images'] != '') { ?>

                                            <img src="<?php echo $row['banner_images']; ?>" width="200"> 
                                        <?php } ?>
                                        <br><hr>
                                        <strong>project image2</strong><input type="file" name="image1" id="fileToUpload">
                                        <input type="hidden" name="old_image1" id="old_image" class="form-control" value="<?php echo $row['banner_images1']; ?>">
                                        <?php if ($row['banner_images1'] != '') { ?>
                                            <br>
                                            <img src="<?php echo $row['banner_images1']; ?>" width="200"> 
                                        <?php } ?>



                                        <br><br>
                                        <input type="submit" name="submit" value="UPDATE" class="btn btn-primary btn-lg">
                                    </form>               

                                </div>
                            </div>	
                        </div>
                    </div> 

                    <br>
                    <br>
                    <br>
                    <!--/#carousel-slider-->
                </div><!--/#about-slider-->


                <!-- Our Skill -->
                <div class="skill-wrap clearfix">



                </div><!--/.our-skill-->
            </div><!--/.container-->
        </section><!--/about-us-->



    </body>
    </html>
<?php } ?>