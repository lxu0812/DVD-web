<!DOCTYPE html>
<link rel="stylesheet" href="css/confirm.css">
<?php
include("db.php");

$id=GetSession();
$cart=GetCartByID($id);
if(isset($_POST['confirm']))
  echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/confirm.css">
  <title>Document</title>
</head>

<body>
  <div class="confirm_table">
    <div class="confirm_table_list">
      <p>List Information</p>
              <ul>
      <li class = "color">DVD</li>
      <li class = "color">Quantity</li>
      <li class = "color">Price</li>
    </ul>
      <?php
      $price=0;
      $quantity=0;

        for($i=0;$i<count($cart);$i++):
          $dvd = GetDvdInformation($cart[$i]['DVD_Id']);
          if ($dvd['Category']=='comedy')
          {
            $x=round($dvd['Price'] * 0.95);
          }
          else {
            $x=$dvd['Price'];
          }
          $price += $x*$cart[$i]['Quantity'];
          $quantity+=$cart[$i]['Quantity'];
        ?>

        <ul>
        <li ><?= $dvd['Name'] ?></li>
        <li ><?= $cart[$i]['Quantity']?></li>
        <li ><?= $dvd['Price'] ?></li>
       </ul>
    <?php endfor; ?>
    <?php
      if ($price >= 500) {
        $Shipping = 0;
      }
      else {
        $Shipping=80;
      }
      $price=$price+$Shipping;
      if ($price>=1000) {
        $dis=300;
      }
      else {
        $dis=0;
      }
      $price=$price-$dis;
     ?>
    <ul>
    <li class = "color">Quantity:<?= $quantity ?></li>
    <li class = "color">total:<?= $price ?></li>
  </ul>

      <div class="right">
        <a href="InsertOrder.php"><button type="submit" name="confirm">Confirm</button></a>
        <a href="shopping_cart.php"><button type="button" name="Cancel">Cancel</button></a>
      </div>
    </div>
    </div>


</body>
</html>
