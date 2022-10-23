<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login | PHP WebSite</title>
</head>
<body>
    
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h4>Login - PHP WebSite</h4>
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
            </div>
                <button href="./index.php" name="login" class="btn btn-primary btn-large btn-block">Login</button>
            </form>
                <a href="./register.php"><button class="btn btn-primary btn-large btn-block">Register</button></a>
        </div>
    </div>

</body>
</html>