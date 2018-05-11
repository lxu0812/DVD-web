<!DOCTYPE html>
<?php include_once("db.php"); ?>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

  <?php include("Menu.php"); ?>
  <div class="container" >

    <div class="row">

      <table class="table mt-5">
        <thead class="thead-dark">
          <tr>
            <!--<th scope="col"  style="1rem">#</th>-->
            <th scope="col"  style="1rem">Order</th>
            <th scope="col"  style="1rem">Member ID</th>
            <th scope="col"  style="5rem">DVD</th>
            <th scope="col"  style="2rem">Price</th>
            <th scope="col"  style="2rem">Quantity</th>
            <th scope="col"  style="2rem">Total</th>
            <th scope="col"  style="2rem">State</th>
            <th scope="col"  style="5rem">Date</th>
            <?php
            if(GetStatus()!=0)
                echo "<th scope="."col"." style="."1rem>Edit</th>";
            ?>
          </tr>
        </thead>
        <tbody>
          <?php include("OrderInformation.php"); ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
