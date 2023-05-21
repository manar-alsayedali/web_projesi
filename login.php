<?php
$kullanici    = $_POST['kullaniciadi'];
$sifre    = $_POST['sifre'];

$kul="manar.ali@ogr.sakarya.edu.tr";
$pas="G221210558";

  if ($sifre == $pas && $kullanici==$kul) {
      
      $sonuc= " Hoş Geldiniz G221210558";
      
      

  }

else {
    
    $sonuc= "yanlış kullanıcı adı veya şifre!!! <br> Tekrar dene ";
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Manar Alsayed Ali</title>
</head>
<body>

<header>
            <a class="navbar-brand logo" href="index.html">Web Sayfası</a>
        <nav class="navbar navbar-expand-lg navbar-light navigation">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html">Hakkımda</a>
                    </li>
                     <li class="nav-item">
                      <a class="nav-link" href="OzGecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="sehrim.html">Şehrim</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="İlgiAlanlarim.html">İlgi Alanlarım</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="iletisim.html">İletişim</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="login.html">Login</a>
                  </li>
                    <!-- other links go here -->
                </ul>
            </div>
        </nav>
      </div>
    </header>
    
    <h1 style="padding-top:150px";>
    
    <?php  echo $sonuc  ?>
        
        
    </h1>
    
    <footer>
        <div class="footer-content">
          <a href="https://www.linkedin.com/in/manar-al-sayed-ali-6b78a5271/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/manar-alsayedali" target="_blank"><i class="fa-brands fa-github"></i></a>
          <a href="https://instagram.com/manar_alsayed_ali?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/manar.alsayedali.90" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
      </footer>
    
    </body>
</html>