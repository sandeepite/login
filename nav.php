<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project test</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><p class="glyphicon glyphicon-user"><?php
                        echo "Welcome " . "<strong ><b>" .$_SESSION['username']. "</b></strong>";
                        ?></p></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a></li>
                        <li><a href="view.php"><b>Project</b></a></li>
                        <li><a href="add.php"><b>Add Projects</b></a></li>
                        <li><a href="about.php"><b>About Us</b></a></li>
                        <li><a href="contact.php"><b>Contact Us</b></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </body>
</html>
