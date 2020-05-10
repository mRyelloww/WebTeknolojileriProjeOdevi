<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta name="viewport" content="width=device-width , initial-scale = 1">
        <meta charset = "utf-8">
        <link rel = "stylesheet" href = "Stiller/bootstrap.min.css">
        <link rel = "stylesheet" href = "Stiller/stilim.css">
        <script src = "Scriptler/scriptim.js"></script>
        <script src = "Scriptler/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>İletişim</title>
    </head>
    
    <body>
        <div class = "container-fluid">
            <div class = "row" id = "baslik">
                <div class = "col-lg-12">
                    <div class="container-fluid"><h1>GİRİŞ YAP</h1></div>
                </div>
            </div>
            <div class = "row">
                <div class = "col-lg-1 col-sm-2 col-xs-3 col-md-2" id = "menu">
                    <list>
                        <ul><a href = "index.html">Hakkında</a><br></ul>
                        <ul><a href = "Özgeçmiş.html">Özgeçmiş</a><br></ul>
                        <ul><a href = "Şehrim.html">Şehrim</a><br></ul>
                        <ul><a href = "Takımımız.html">Takımımız</a><br></ul>
                        <ul><a href = "Iletişim.html">İletişim</a><br></ul>
						<ul><a href = "Giris.php">Giriş Yap</a><br></ul>
                    </list>
                </div>
                <div class = "col-lg-11 col-sm-10 col-xs-9 col-md-10" id = "paragraf">
                    <form action = "login_page.php" method = "POST">
                        Kullanıcı Adı:<br> <input type = "text" name = "kullaniciAd"><br>
                        Şifre:<br> <input type = "password" name = "sifre"><br>
						<br>
                        <input type = "submit" value = "Giriş Yap">
                    </form>
    <?php
        if(isset($_GET['geriDon']))
        {
            if($_GET['geriDon'] == 'girisBasarisiz')
            {
               ?>
                <div class = "alert">
                    Kullanıcı adı veya şifre hatalı.
                </div>
               <?php
            }
      
        }
                    
        if(isset($_GET['geriDon']))
        {
            if($_GET['geriDon'] == 'mailTipindeDegil')
            {
               ?>
                <div class = "alert">
                    Kullanıcı adı mail tipinde değil.
                </div>
               <?php
            }
      
        }
                    
        if(isset($_GET['geriDon']))
        {
            if($_GET['geriDon'] == 'ikisideBos')
            {
               ?>
                <div class = "alert">
                    Kullanıcı adı ve şifre boş bırakılamaz.
                </div>
               <?php
            }
      
        }
                    
        if(isset($_GET['geriDon']))
        {
            if($_GET['geriDon'] == 'kullaniciBos')
            {
               ?>
                <div class = "alert">
                    Kullanıcı adı boş bırakılamaz.
                </div>
               <?php
            }
      
        }
        if(isset($_GET['geriDon']))
        {
            if($_GET['geriDon'] == 'sifreBos')
            {
               ?>
              <div class = "alert">
                    Şifre boş bırakılamaz.
              </div>
               <?php
            }
            
        }
        
    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>