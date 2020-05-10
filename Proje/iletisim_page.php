<!doctype html>
<html>
    <body>
        <?php
        $ad=$_POST['ad'];
        $soyad=$_POST['soyad'];
        $email=$_POST['e-mail'];
        $cinsiyet = $_POST['cinsiyet'];
        $mesaj = $_POST['message'];
        $neden = $_POST['neden'];
        echo "Hoşgeldiniz $ad $soyad ... <br> E-Mailiniz: $email <br> Cinsiyetiniz: $cinsiyet <br> Bize yazma sebebiniz: $neden <br> Mesajınız: $mesaj";
        ?>
    </body>
</html>