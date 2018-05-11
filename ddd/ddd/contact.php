<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
?>

<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <?php include("css.php"); ?>
  <link rel="stylesheet" href="css/stock.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/shopping_cart.css">
  <body>
    <?php include("Menu.php"); ?>
  <div class="container">
    <div class="header">
      <div class="title">
          <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
      </div><!--container-->
    </div>
    <div class="row mt-5">
      <div class="message">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.760112541775!2d121.53330961459115!3d25.04221378396849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a97d14c16483%3A0xf9ec3b549c4d6dbf!2z5ZyL56uL6Ie65YyX56eR5oqA5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1493144952578" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="icon">
            <div class="m_icon">
                <img src="images/phone.png" alt="phone">
                <a class="m_icon_t">Tel: (886-2) 2771-2171</a>
            </div>

            <div class="m_icon">
                <img  src="images/fax.png" alt="fox">
                <a class="m_icon_t">(02)8773-2945</a>
            </div>
            <div class="m_icon">
                <img  src="images/email.png" alt="email">
                <a class="m_icon_t">wwwcsie@ntut.edu.tw</a>
            </div>
            <div class="m_icon">
                <img  src="images/map-location.png" alt="map_location">
                <a class="m_icon_t">10608 台北市忠孝東路三段一號</a>
            </div>
          </div>
        </div>

      </div>
      <?php include("below.php") ?>
  </div>


  </body>
</html>
