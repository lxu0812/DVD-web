<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('db.php');
function Delete($DVD_Id)
{
  DeleteGoodsInCart($DVD_Id);
}
if(isset($_GET['delete']))
{
  echo $_GET['delete'];
  Delete($_GET['delete']);
}
?>

<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <?php include("Menu.php"); ?>
  <div class="container">

    <div class="row mt-5">
      <h2>Here's What You're Getting!</h2>
    </div>
    <div class="row">
      <table class="table mt-5">
        <thead class="thead-dark">
          <tr>
            <th scope="col"  style="1rem">Picture</th>
            <th scope="col"  style="1rem">Product</th>
            <th scope="col"  style="2rem">Price</th>
            <th scope="col"  style="2rem">Quantity</th>
            <th scope="col"  style="2rem">Total</th>
            <th scope="col"  style="2rem">Discount Total</th>
            <th scope="col"  style="2rem">Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $shopping_cart=FindShoppingCart(GetSession());
            for($i=0;$i<count($shopping_cart);$i++):
              if ($shopping_cart [$i]['Category']=='comedy')
              {
                $x=round($shopping_cart[$i]['Price'] * 0.95);
                $y[$i]=round($shopping_cart[$i]['Price'] * 0.95);
              }
              else {
                $x=$shopping_cart[$i]['Price'];
                $y[$i]=$shopping_cart[$i]['Price'];
              }
              $price="NT".$shopping_cart[$i]['Price'];
              $price_total = "NT".$shopping_cart[$i]['Price'] * $shopping_cart[$i]['Quantity'];
              $discount_total = "NT".$x * $shopping_cart[$i]['Quantity'];
              ?>
              <th  scope="row"><img src=<?= $shopping_cart[$i]['Picture'] ?>></th>
              <td  ><?= $shopping_cart[$i]['Name'] ?></td>
              <td ><?= $price ?></td>
              <td ><?= $shopping_cart[$i]['Quantity'] ?></td>
              <td ><?= $price_total ?></td>
              <td ><?= $discount_total ?></td>
              <?php
              echo "<td class="." scope="."row"."><a href=shopping_cart.php?delete=".$shopping_cart[$i]['Id']."> <img src=".'images/rubbish-bin.png'."></a></td>";
              echo "</tr>";
            endfor;
            ?>
          </tbody>
        </table>
      </div>


      <div class="row mt-5">
        <?php
        $correct = 0;
        $code=" ";
        ?>
        <form  action="shopping_cart.php" method="post">
          Discount code:
          <input type="text" <?php echo "name="."text_sale"; ?>>
          <input type="submit" name='submit' value='送出'>
          <p>(The amount must be greater than $1000)</p>
        </form>

      </div>

      <?php
      $totalPrice=0;
      $Shipping=80;
      for($i=0;$i<count($shopping_cart);$i++)
      $totalPrice += ($y[$i]*$shopping_cart[$i]['Quantity']);
      if ($totalPrice >= 500) {
        $Shipping = 0;
      }
      ?>
      <?php
      $code=@$_POST['text_sale'];
      $dis=comparison($code,$totalPrice);
      ?>
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5">
          <div class="text-secondary">
            <u><h1>Sub Total: NT <?= $totalPrice ?></h1></u>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5">
          <div class="text-secondary">
            <u><h1>Shipping costs: NT<?= $Shipping?></h1></u>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5">
          <div class="text-secondary">
            <u><h1>Discount: NT<?= $dis?></h1></u>
          </div>
        </div>
      </div>


      <?php
      $grand=$totalPrice+$Shipping-$dis;
      ?>
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5">
          <div class="text-secondary">
            <u><h1>Grand Total: NT<?= $grand?></h1></u>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7"></div>
        <div class="col-md-5"><a class="btn btn-primary btn-lg" href=<?php echo "Confirm.php?dis=".$dis ?>>Checkout</a></div>
      </div>
    </div>



  </body>
  </html>
