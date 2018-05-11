<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
?>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/stock.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<?php include("css.php"); ?>

<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <!-- Navigation -->
	<?php include("Menu.php")?>
	<div class="container">
		<div class="row">
		<div class="agile-its-header">
			<div class="logo">
				<a href="index.php">NTUT DVD STORE</a>
			</div>
		</div>
		<div class="sliders">
    <div class="w3-content w3-display-container">
      <img class="mySlides" src="images/sale-0.png" style="width:100%">
    </div>
  </div>
		</div>
		<!-- //Slider -->
		<!-- content-starts-here -->
		<div class="row mt-5">
			<div class="col-md-offset-1">
			<?php
			$type= $_GET["type"];
			if($type==-1)
			$dvd=GetAllDVD();
			else
			$dvd = GetDVDByCategory($type);
			$i=0;
			while ( $i<count($dvd) ) {
				$Name=$dvd[$i]['Name'];
				$URL=$dvd[$i]['Picture'];
				$id=$dvd[$i]['Id'];
				$price=$dvd[$i]['Price'];
				include ("goods.php");
				$i=$i+1;
			}
			?>
		</div>

					</div>
		<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
	</div>
	<?php
	include("below.php");
	?>
</body>
</html>
