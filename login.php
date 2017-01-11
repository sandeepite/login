<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>User Login</title>

        <!-- Bootstrap -->
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">
        <script>
            function validate()
            {

                if (document.myForm.username.value == "")
                {
                    alert("enter your username!");
                    document.myForm.username.focus();
                    return false;
                }

                if (document.myForm.password.value == "")
                {
                    alert("enter password!");
                    document.myForm.password.focus();
                    return false;
                }
                return(true);
            }
        </script>
       
    </head>

    <body>
<?php include 'header.php'; ?>
        <div class="login-page">
            <h4><b>Login Form</b></h4>
            <div class="form">

                <form class="login-form" method='post' action="logincheck.php" name="myForm" onsubmit="return(validate());">
                    <input type="text" name="username" size="20" maxlength="20" placeholder="username"/>
                    <input type="password" name="password" size="20" maxlength="20" placeholder="password"/>
                    <button name="submit">login</button>
                    <?php
                    if (isset($_REQUEST["err"]))
                        echo "Invalid Username or Password";
                    ?>

                    <p class="message">Not registered? <a href="loginform.php">Create an account</a></p>

                </form>
            </div>
        </div>
    </body>
</html>