<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();
?>
<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<?php include("css.php"); ?>
<link rel="stylesheet" href="css/stock.css">
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/shopping_cart.css">
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <!-- Navigation -->
  <!-- Navigation -->
  <?php include("Menu.php"); ?>
    <!-- //Navigation -->
	<!-- header -->
  <header>
    <div class="w3ls-header"><!--header-one-->
      <div class="w3ls-header-right">
        <ul>
          <li class="dropdown head-dpdn">
            <a href="index.php" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i>Home Page</a>
          </li>
        </ul>
      </div>

      <div class="clearfix"> </div>
    </div>
          <!-- </li>
          <li class="dropdown head-dpdn">
            <a href="#"><span class="active uls-trigger"><i class="fa fa-language" aria-hidden="true"></i>languages</span></a>
          </li>
          <li class="dropdown head-dpdn">
            <div class="header-right"> -->
  <!-- Large modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
          aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                  <h4 class="modal-title" id="myModalLabel">


			<div class="clearfix"> </div>
		</div>
		<div class="container">
			<div class="agile-its-header">
				<div class="logo">
					<h1><a href="index.html"><span>Re</span>sale-v2</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	 <section>
		<div id="agileits-sign-in-page" class="sign-in-wrapper">
			<div class="agileinfo_signin">
			<h3>Sign Up</h3>
				<form action=<?php echo "AddMember.php?status=0"; ?>   method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input type="text" name="Email" placeholder="Email" required="">
					<input type="text" name="tel" placeholder="Phone Number" required="">
          <input type="text" name="Birthday" placeholder="Your Birthday YYYY/MM/DD" required="">
          <input type="text" name="IDNumber" placeholder="Address" required="">
					<input type="text" name="Password" placeholder="Password" required="">
					<input type="text" name="Password2" placeholder="Confirm Password" required="">
          <select name="YourSex">
        　<option value=1>Male</option>
        　<option value=0>Female</option>
          </select>
					<div class="signin-rit">
						<span class="agree-checkbox">
						</span>
					</div>
            <?php
            ?>
					<input type="submit" value="Sign Up" >
				</form>
			</div>
		</div>
	</section>
	<!-- //sign up form -->
	<!--footer section start-->
  <footer>
    <div class="w3-agileits-footer-top">
      <div class="container">
        <div class="wthree-foo-grids">
          <div class="col-md-3 wthree-footer-grid">
            <h4 class="footer-head">Who We Are</h4>
            <address>
              <ul class="location">
                <li><span class="glyphicon glyphicon-user"></span></li>
                <li>一群爆肝的北科大資工系大三學生</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
              </ul>
            </address>
          </div>
          <div class="col-md-3 wthree-footer-grid">
          </div>
          <div class="col-md-3 wthree-footer-grid">
            <h4 class="footer-head">Contact Us</h4>
            <address>
              <ul class="location">
                <li><span class="glyphicon glyphicon-map-marker"></span></li>
                <li>台北市大安區忠孝東路三段一號</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
                <li><span class="glyphicon glyphicon-earphone"></span></li>
                <li>02-2771-2171</li>
              </ul>
              <div class="clearfix"> </div>
              <ul class="location">
              </ul>
            </address>
          </div>
          <div class="clearfix"></div>
        </div>
  </footer>
        <!--footer section end-->
</body>
		<!-- Navigation-JavaScript -->
			<script src="js/classie.js"></script>
			<script src="js/main.js"></script>
		<!-- //Navigation-JavaScript -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear'
						};
					*/

					$().UItoTop({ easingType: 'easeOutQuart' });

					});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>
