<?php
include("config.php");
include_once 'session.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>View projects</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

    </head>
    <body>
        <?php include 'nav.php'; ?>	

        <div class="container">


            <div class="pa">

                <a href="add.php" class="btn btn-primary btn-lg">Add New Project</a><hr>
                <h5 class="ba">Project View | Update and delete</h5><hr>
            </div>
            <table class="table table-bordered" border="1" width="100%;">
                <tr class="in">
                    <th>Project Name</th>
                    <th>Project Category </th>
                    <th>Project client </th>
                    <th>images</th>
                    <th>UPDATE/REMOVE</th>
                </tr>


                <?php
                $sql = "select * from project";
                $res = mysql_query($sql);
                if (mysql_num_rows($res) != 0) {
                    while ($row = mysql_fetch_array($res)) {
                        ?>

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
                            <?php if ($row['banner_images'] != '') { ?>
                                <img src="<?php echo $row['banner_images']; ?>" width="80">
                            <?php } ?>
                        </td>
                        <td>  
                            <a href="edit.php?id=<?php echo $row['id']; ?>" title="edit this item"> <img src="images/edit.png" width="25" height="25"></a>|
                            <a href="delete.php?id=<?php echo $row['id']; ?>" title="delete this item"  onclick="return confirm('Do you really want to remove it?')" title="delete">
                                <img src="images/delete.png" width="20" height="20"> </a>
                        </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
        <div style="height:217px;"></div>
    </div>
</body>
</html>