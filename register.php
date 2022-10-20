<!DOCTYPE html>
<html lang = "en" dir = "ltr">
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Cup and Cakes</title>
        <link rel = "stylesheet" href = "style_register.css">
    </head>

    <body>
        <div class="container">
            <div class="register">
                <form action = "tampil.php" method = "post">
                    <h1>Register</h1>
                    <hr>
                    <br>
                    <label for = "">EMAIL</label>
                    <input type = "email" name = "email" required placeholder="example@gmail.com"><br>
                    <label for = "">NAMA DEPAN</label>
                    <input type = "text" name = "namadepan" autocomplete = "off" placeholder="nama depan"><br>
                    <label for = "">NAMA BELAKANG</label>
                    <input type = "text" name = "namabelakang" autocomplete = "off" placeholder="nama belakang"><br>
                    <label for = "">TANGGAL LAHIR</label>
                    <input type = "date" name = "tl"><br>
                    <label for = "">NOMOR TELEPON</label>
                    <input type = "number" name = "hp" placeholder="08**********"><br>
                    <label for = "">PASSWORD</label>
                    <input type = "password" name = "pwd" required placeholder="**********"><br>

                    <input type = "submit" name = "register"><br>
                    
                    <p>
                        <a href="login.php">Sudah Mempunyai Akun ?</a>
                    </p>
                </form>
            </div>
        </div>

        <input type = "checkbox" onclick = "ubahMode()">

        <script src = "main.js"></script>
    </body>
</html>