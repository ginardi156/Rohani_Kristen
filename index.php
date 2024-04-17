<?php 

require_once 'Rohani Kristen Backend/assets/settings/connection.php';
require_once 'Rohani Kristen Backend/assets/settings/function.php';

$result = display_data();

?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ROHKRIS SMPN 28 JKT</title>
    <link rel="icon" type="image/x-icon" href="Rohani Kristen Backend/assets/img/logo.png">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>
  <body>
    <nav>
      <div class="left">
        <img src="Rohani Kristen Backend/assets/img/logo.png" alt=""></img>
      </div>
      <div class="right">
        <a href="">PROFILE</a>
        <a href="">KEGIATAN</a>
        <a href="">BAHAN AJAR</a>
        <a href="">EKSTRAKURIKULER</a>
        <a href="">MEDIA SOSIAL</a>
        <a href="">HASIL KARYA</a>
        <a href="">PRKJ</a>
      </div>
    </nav>

    <div class="slides">
      <?php 
                                    
        while($row=mysqli_fetch_assoc($result)) 
          { 
            $id = $row['id'];
            $file = $row['file'];
          ?>
      <div class="slide">
        <img src="Rohani Kristen Backend/assets/img/<?php echo $file ?>" alt="">
      </div>
      <?php 
        } 
      ?> 
      <div class="navigation">
        <a class = "prev" onclick = "plusSlides(-1)">&#10094;</a>
        <a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
      </div>
    </div>

    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide");
        if (n > slides.length)
        {
          slideIndex = 1;
        }
        if (n < 1)
        {
          slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++)
        {
          slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
    </script>
  </body>
</html>