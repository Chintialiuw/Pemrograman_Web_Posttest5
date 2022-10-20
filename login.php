<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style_login.css">
    </head>
    <body>
        <div class="container">
            <div class="login">
                <form action="after_login.php" method = "post">
                    <h1>Login</h1>
                    <hr>
                    <br>
                    <p>
                        <a href = "login_admin.php">Saya Admin</a>
                    </p>
                    <label for="">EMAIL</label>
                    <input type="text" placeholder="example@gmail.com">
                    <label for="">PASSWORD</label>
                    <input type="password" placeholder="**********">

                    <button a class = "links" href = "after_login.php">Log In<br></button>

                    <p>
                        <a href="#">Forgot Password ?</a>
                    </p>
                </form>
            </div>
        </div>

        <input type = "checkbox" onclick = "ubahMode()">

        <script src = "main.js"></script>
    </body>
</html>