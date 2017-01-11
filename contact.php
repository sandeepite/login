<?php
include_once 'session.php';
?>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php include 'nav.php'; ?>	
         <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <legend>Contact Us</legend>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><strong>Name</strong></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputEmail" placeholder="Name" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label"><strong>Email</strong></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label"><strong>Mobile Number</strong></label>
                    <div class="col-lg-10">
                        <input class="form-control" id="inputPassword" placeholder="mobile" type="tel">

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </fieldset>
        </form>
         </div>
    </body>
</html>