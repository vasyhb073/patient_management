<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
 

    
        <div  class="form-design">
            <center class="title-deg">
                Login Form

                <h4>
                    <?php
                    error_reporting(0);

                   echo $_SESSION['loginMessage'];
                   session_destroy();

                    ?>
                </h4>
            </center>
            <form class="login-form" action="login_check.php" method="POST">

            <div> 
                <label class="label-deg"  for="">Username</label>
                <input  type="text" name="username">
            </div>
            <div> 
                 <label class="label-deg" for="">Password</label>
                 <input  type="password" name="password">
            </div>
            <div> 
 
                 <input class="btn btn=primary" id="submit" type="submit" name="submit" value="login">
                 </div>


            
            </form>
        </div>
    </center>
    
</body>
</html>