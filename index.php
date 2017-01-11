<?php
include("config.php");
include_once 'session.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Home | Projects</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

        <style>
            @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

            tbody > tr {
                cursor: pointer;
            }

            .result{
                margin-top:20px;
            }
        </style>



    </head>
    <body>
        <?php include 'nav.php'; ?>	




        <div class="container">

            <h1> <i><img src="images/projects.png" width="100" height="100"></i> Project <small> - Click on detail icon for full details</small></h1>

            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Project Name</th>
                        <th>Project Category </th>
                        <th>Project client </th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from project";
                    $res = mysql_query($sql);
                    if (mysql_num_rows($res) != 0) {
                        while ($row = mysql_fetch_array($res)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['project_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['project_cat']; ?>
                                </td>
                                <td>
                                    <?php echo $row['project_client']; ?>
                                </td>
                                <td>
                                    <a href="details.php?id=<?php echo $row['id']; ?>" title="get full details"> <img src="images/details.png" width="25" height="25"></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    ?>        
                </tbody>
            </table>  




        </div>

    </body>
</html>