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
$id = @$_GET["Id"];
function AddGoodsToCart()
{
  $id = @$_GET["Id"];
  $dvd = GetDvdInformation((int)$id);
  AddToCart($dvd['Id']);
}
if(isset($_POST['add']))
{
  if(GetSession()!=-1)
   AddGoodsToCart();
  else
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
 }
 if(isset($_POST['comment'])&&isset($_POST['text']))
 {
   $id = @$_GET["Id"];
   $dvd = GetDvdInformation((int)$id);
   AddComment($dvd['Id'],$_POST['text']);
 }
?>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <?php include("css.php"); ?>
  <link rel="stylesheet" href="css/stock.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/shopping_cart.css">
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

		<?php include("Menu.php");?>

  <header>

      <div class="clearfix"> </div>
    </div>
	</header>
	<!-- //header -->
  <header>
    <div class="container">
      <div class="agile-its-header">
        <div class="logo">
          <h1><a href="index.php"><span>NTUT  </span>DVD Store</a></h1>
        </div>
      </div>
  </header>	<!-- breadcrumbs -->
	<!-- //breadcrumbs -->
	<!--single-page-->
	<div class="single-page main-grid-border">
		<div class="container">
			<div class="product-desc">
				<div class="col-md-7 product-view">
          <p><?php $dvd = GetDvdInformation((int)$id); echo $dvd['Name']; ?></p>
					<div class="flexslider">
						<ul class="slides">
              <p> <img src=<?php echo $dvd['Picture']; ?> </p>
					</div>
					<div class="product-details">
						<h4><span class="w3layouts-agileinfo">出版商 </span> : <p><?php  echo $dvd['Publisher']; ?></p>

						<h4><span class="w3layouts-agileinfo">片長 </span> : <p><?php  echo $dvd['Time']; ?></p>
						<h4><span class="w3layouts-agileinfo">演員 </span> : <p><?php  echo $dvd['Actor']; ?></p>
						<h4><span class="w3layouts-agileinfo">劇情簡介 </span> :<p><?php  echo $dvd['Introduction']; ?></p>

					</div>
				</div>
        <?php  $id = @$_GET["Id"];  ?>
        <div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price"><?php echo "售價 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$".$dvd['Price']; ?></p>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price"><?php echo "上市日期 &nbsp&nbsp&nbsp&nbsp".$dvd['Publish_Date']; ?></p>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price"><?php echo "分級 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$dvd['Level']; ?></p>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
        <?php if(GetStatus()==0): ?>
        <div class="interested text-center" >
          <h4>CLICK TO BUY THIS NOW!</h4>
          <form  <?php echo "action="."single.php?Id=".$id; ?>  method="post">
              <input type="submit" value="Add To Shopping Cart" name="add">
          </form>
        </div>
      <?php endif; ?>
        <?php
        if(GetStatus()==0):
        ?>
        <div class="interested text-center" >
          <h4>CLICK TO ADD COMMENT!</h4>
          <form  <?php echo "action="."single.php?Id=".$id; ?>  method="post">
            <input type="text" placeholder="Add Comment..." name="text">
              <input type="submit" value="Add Comment" name="comment">
          </form>
        </div>
      <?php endif; ?>
        <div class="interested text-center">
              <iframe <?php echo "src=comment.php?DVD_ID=".$id?> height="480" width="350" scrolling="yes"＞</iframe>
        </div>
			</div>
		</div>
        </div>
	</div>
	<!--//single-page-->
	<!--footer section start-->
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->
</html>
