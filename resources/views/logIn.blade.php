<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="form">
        <title>form</title>
        <link rel="stylesheet" href="{{ asset('css/logIn.css') }}">
    </head>
    <body>
        <div class="split">
            <form action="" method="post">
                <div class="errorsList">
                    <div class="error"></div>
                </div>
                <h2>Log in</h2>
                <input type="email" placeholder="HarryPotter_@" name="username" id="email" required>
                <input type="password" placeholder="*******" name="password" required><br><br><br>
                <input type="checkbox" readonly> remember me?<br>
                <input type="submit" value="log in"><br>
                <br>
                <div class="container">
                <a href="" class="reset">Reset password</a> ||
                <a href="" class="forgot">Forgot password</a>
                </div><br><br>
                Don't have account?<a href="../Sign%20Up%20Form/Sign%20Up%20Form.html">&nbsp;Sign up</a>
            </form>
        </div>
    </body>

</html>