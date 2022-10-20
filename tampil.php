<?php
    echo "<html>";
    echo "<head>";
    echo "<title>Cup and Cakes</title>";
    echo "<link rel = \"stylesheet\" href = \"style_register.css\">";
    echo "<div class = \"container\">";
    echo "<div class = \"tampil\">";
    if(isset($_POST['register']))
    {
        $email = $_POST['email'];
        $namaDepan = $_POST['namadepan'];
        $namaBelakang = $_POST['namabelakang'];
        $tanggal = $_POST['tl'];
        $nomortlp = $_POST['hp'];
        $password = $_POST['pwd'];

        echo"<p>Halo ",$namaDepan, " !, berikut adalah data yang telah terinput ke dalam sistem kami : ";
        echo"<br>";
        echo"<br>Email          : $email";
        echo"<br>Nama Depan     : $namaDepan";
        echo"<br>Nama Belakang  : $namaBelakang";
        echo"<br>Tanggal Lahir  : $tanggal";
        echo"<br>Nomor Telepon  : $nomortlp</p>";
        echo"<button>";
        echo"<a class = \"links\" href = \"login.php\">Klik disini untuk melanjutkan</a>";
    }     
    echo "</div>"; 
    echo "</div>"; 
    echo "</head>";
    echo "</html>";
?>
