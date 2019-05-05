<?php
 session_start();
 session_unset();
 session_destroy();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/jpg" href="pictures/icon.jpg">
    <link rel="stylesheet" type="text/css" href="style/my-style.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>DMOffice</title>
  </head>

  <body>

    <!-- Login Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
      <a class="navbar-brand" href="#">
        DMOFFICE
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="common_about_page.php">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="common_help_page.php">Help</a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Content -->
    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
        <div class="row">
          <div class="col-4" style="text-align: justify;">
            <h4>About us</h4>
            <p>Az informatikai széleskörű elterjedése, és rohamléptékű fejlődése miatt, az embereknek folyamatosan lépést kell tudni tartani a technológia újításokkal, innovációkkal. Ez hatványozottan igaz a gazdasági szektor szereplőire. Amelyik vállalat nem naprakész informatika beruházások terén, jelentős versenyhátrányt szenved progresszívabb társaikkal szemben. Új rendszerek bevezetése mindig kellemetlenségekkel jár mind a vezetés, mind a munkavállalók számára. Ameddig az új rendszer használata rutinszerűvé nem válik – nagyobb beruházások esetében ez 2-3 hónap -, addig a munka akadozni fog. [1] A projektem célja egy olyan vállaltirányítási rendszer prototípusának a kidolgozása, melynek üzembehelyezése minél zökkenőmentesebben tud lezajlani.</p>
          </div>
          <div class="col-8" style="text-align: justify;">
            <h4>Contracts</h4>
            <p>Manapság a legtöbb területen a webes alapú alkalmazásokat preferálják az egyszerű asztali aklalmazásokkal szemben. Ennek az oka alapvetően egy fejlszetői, illetve üzemeltetői szemléletmód. Egy egyszerű asztali alkalmazás esetében meg kell vizsgálni, hogy azt milyen hardveren, hardvereken szeretnénk futtatni, ez milyen kompatibiliási beállításokat igényel illetve milyen egyéb költségekkel jár. [2] Nemcsak a külnönböző operációs rendszerek (Windows, Linux, Mac), de azoknak a különbőző verzióik is eltérő beállításokat igényelnek. Bár az esetek többségében előre tudható, hogy milyen rendszerekren lesz használva a program, egy esetleges átállás, komolyabb szovftverfrissítés, vagy akár egyszerűen a hardverelemek cseréje is kompatibilitási problémát jelenthet. Ezzel szemben egy webalkamazás fejlesztése során, a kliens oldal szempontjából csak az inernetes böngésző és annak verziója fog számítani a fejlesztés során. Mivel ezek közül magasan a legnépszerűbb a Google Chrome, ahogy az 1-es ábra is mutatja, továbbá annak beszerzése ingyenes, telepítése egyszerű, és a legtöbb operációs rendszer támogatja, én a projekt tervezése során elégségesnek éreztem kizárólag erre a böngészőre történő optimalizálását figyelembe venni.
            Természetesen a szerver, melyen alkalmazásunk futni fog, komolyabb megfontolásokat igényel. Figyelembe kell venni hogy hányan, milyen időközönként, mennyi ideig, milyen erőforrás igények mellett kívánják a szoftvert használni. Továbbá számíthatunk-e bővítésre, technológi váltásra. Ezek mellett szükséges fenntartanunk egy másodlagos szervert, melyet használni lehet az elsődleges szerverünk meghibásodása esetén.
            Egy másik fontos aspektus az üzemeltetés. Egy szovftverhez, legyen az asztali vagy web alkalmazás, kisebb-nagyobb időközönként frissítésre szorul. Amíg web alkalmazás esetében elegendő egy szerveroldali frissétés, addig az asztali alkalmazásokat egyesésével kell update-elni. Minél többen használják az alkalmazást ez annál hosszadalmasabb folyamat.</p>
          </div>
        </div>
    </div>

    <!-- Login footer -->
    <footer class="page-footer">
      <div class="container center">
        <div class="text-center">
          <a href="https://www.facebook.com/GojiraMusic"><i class="fa fa-facebook-official"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-snapchat"></i></a>
          <a href="#"><i class="fa fa-pinterest"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
        <div class="text-center">
          <p>We do not respect your privacy. - Powered by <a href="https://www.mushroom.com">Mushroom.com</a></p>
        </div>
      </div>
    </footer>

  </body>
</html>
