<!doctype html>
<html>
    <body>
        <?php
        $kullaniciAd= 'g191210351@sakarya.edu.tr';
        $sifre= '123';
        
        if($kullaniciAd == $_POST['kullaniciAd'] && $sifre == $_POST['sifre'])
        {
            echo "Giriş Başarılı. <br>";
            echo "Hoşgeldiniz $kullaniciAd ";
        }
        else if($kullaniciAd != $_POST['kullaniciAd'] || $sifre != $_POST['sifre'])
        {
            header("location:Giris.php?geriDon=girisBasarisiz");
        }
        
        if(!filter_var($_POST['kullaniciAd'],FILTER_VALIDATE_EMAIL))
        {
            header("location:Giris.php?geriDon=mailTipindeDegil");
        }
        
        if(($_POST['kullaniciAd'] == null || $_POST['kullaniciAd'] == '' ) && ($_POST['sifre'] == '' || $_POST['sifre'] == null))
        {
            header("location:Giris.php?geriDon=ikisideBos");
        }
        
        
        else if($_POST['kullaniciAd'] == null || $_POST['kullaniciAd'] == '')
        {
            header("location:Giris.php?geriDon=kullaniciBos");
        }
        else if($_POST['sifre'] == '' || $_POST['sifre'] == null)
        {
            header("location:Giris.php?geriDon=sifreBos");
        }
        
        
        
            

       
        
        
        
        ?>
    </body>
</html>