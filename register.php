<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Register | PHP WebSite</title>
</head>
<body>
    
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h4>Register - PHP WebSite</h4>
            </div>
            <form action="./operation.php" method="post">
            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" placeholder="Enter Your Username" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-filed" placeholder="Enter Your Password" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password-again" class="login-filed" placeholder="Enter Your Password Again" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
            </div>
            <button href="./index.php" name="register" class="btn btn-primary btn-large btn-block">Register</button>
            </form>
            <a href="./login.php"><button class="btn btn-primary btn-large btn-block">Login</button></a>
        </div>
    </div>

    <?php
    require 'connections.php';
    ?>

</body>
</html>