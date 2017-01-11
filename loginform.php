<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        <!-- Bootstrap -->
        <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/admin.css" rel="stylesheet">
        <script type="text/javascript">
   
      
      function validate()
      {
      
         if( document.myForm.username.value == "" )
         {
            alert( "Please enter your username!" );
            document.myForm.username.focus() ;
            return false;
         }
         
         if( document.myForm.password.value == "" )
         {
            alert( "Please choose a password!" );
            document.myForm.password.focus() ;
            return false;
         }
         if( document.myForm.email_id.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.email_id.focus() ;
            return false;
         }
         if( document.myForm.mobile.value == ""  ||
         isNaN( document.myForm.mobile.value ) ||
         document.myForm.mobile.value.length != 10)
         {
            alert( "Please provide your 10 digit mobile number!" );
            document.myForm.mobile.focus() ;
            return false;
         }
         
         if( document.myForm.age.value == "" )
         {
            alert( "Please enter your age" );
            document.myForm.age.focus() ;
            return false;
         }
         if( document.myForm.address.value == "" )
         {
            alert( "Please enter your address!" );
            document.myForm.address.focus() ;
            return false;
         }
         return( true );
      }
  
</script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="login-page">
            <h4><b>Registration Form</b></h4>
            <div class="form">
             <form class="login-form" method='post' action="signup.php" name="myForm" onsubmit="return(validate());">
                    <input type="text" name="username"  placeholder="username"/>
                    <input type="password" name="password" placeholder="password"/>
                    <input type="email" name="email_id" placeholder="email id"/>
                    <input type="text" name="mobile" placeholder="Mobile Number"/>
                    <input type="text" name="age" placeholder="Your Age"/>
                    <input type="text" name="address" placeholder="Your Address"/>
                    <button name="register">Register</button>
                    <?php
                        if (isset($_REQUEST["err"]))
                            echo "<script>alert('OOPS! There are some error occure try again with diifrent username');</script></p>";
                        ?>
                    </form>
            </div>
        </div>
    </body>
</html>