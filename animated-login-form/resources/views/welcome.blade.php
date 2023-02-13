<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="box">
        <form action="">
            <h2> Sign In</h2>
            <div class="inputBox">
                <input type="text" required>
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#">Signup</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
