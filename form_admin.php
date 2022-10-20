<?php

    require 'config.php';

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $topping = $_POST['topping'];
        $gula = $_POST['gula'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];

        $result = mysqli_query($db, 
        "INSERT INTO menu_cupcakes (nama, topping, gula, harga, stok) 
        VALUES ('$nama','$topping','$gula', '$harga', '$stok')");

        if($result){
            echo "
                <script>
                    alert('Data Berhasil Diinput');
                    document.location.href = 'admin.php';
                </script>
            ";
        }else {
            echo "
                <script>
                    alert('Data Gagal Diinput');
                </script>
            ";
        }
    }
?>

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
                <form action = "" method = "post">
                    <h1>Input Menu</h1>
                    <hr>
                    <br>
                    <label for = "">NAMA MENU</label>
                    <input type = "text" name = "nama"><br>
                    <label for = "">TOPPING</label>
                    <input type = "text" name = "topping"><br>
                    <label for = "">LEVEL GULA</label>
                    <input type = "text" name = "gula"><br>
                    <label for = "">HARGA</label>
                    <input type = "number" name = "harga"><br>
                    <label for = "">STOK</label>
                    <input type = "number" name = "stok"><br>

                    <br><input type="submit" name="kirim">

                </form>
            </div>
        </div>

        <input type = "checkbox" onclick = "ubahMode()">

        <script src = "main.js"></script>
    </body>
</html>