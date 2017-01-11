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
            <title>projects details</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </head>

        <body>
            <?php include 'nav.php'; ?>	
            <br>
            <br>
        <section1 id="about-us">
            <div class="container">
                <h4><strong>Project details</strong></h4>

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

                                    <div class="row">
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>Project Name</strong></h6></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong><?php echo $row['project_name']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>Project Category</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong><?php echo $row['project_cat']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>Project client</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong> <?php echo $row['project_client']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>Project start date</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"> <strong><?php echo $row['project_start_date']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>completed date</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong><?php echo $row['project_com_date']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>project assign to</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong><?php echo $row['project_assign']; ?></strong></div>
                                        <br><br>
                                        <div class="col-sm-2" style="background-color:#f5f5f5;"><h6><strong>Project Category</strong></div>
                                        <div class="col-sm-4" style="background-color:#ffffff;"><strong><?php echo $row['project_cat']; ?></strong></div>

                                    </div><br>
                                    <h6><strong>Project Image1</strong><br><br>
                                    <img src="<?php echo $row['banner_images']; ?>" class="img-rounded" alt="<?php echo $row['banner_images']; ?>" width="304" height="236"> 
                                    <br><hr>
                                    <h6><strong>Project Image2</strong>
                                    <br><br>
                                    <img src="<?php echo $row['banner_images1']; ?>" class="img-rounded" alt="<?php echo $row['banner_images']; ?>" width="304" height="236"> 


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