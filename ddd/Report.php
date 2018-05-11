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
            <p>Please choose :</p><p>
            <form action="Report.php" method="post">
              <select name="choose">
                <option value='0'>none</option>
                <option value='1'>daily</option>
                <option value='2'>week</option>
                <option value='3'>month</option>
              </select>
              <input type="submit" value="OK" name="specially">
            </form>
          </tr>
          <tr>

            <p>Search </p>
            <form action="Report.php" method="post">
              from : <p> <input type="date" name="Fday">
              to : <p> <input type="date" name="Lday">
              <input type="submit" value="OK" name="period">
            </form>
          </tr>
          <tr>
            <th scope="col"  style="5rem">DVD</th>
            <th scope="col"  style="5rem">Sales</th>
          </tr>
        </thead>
        <tbody>

          <?php
          if(isset($_POST['period']))
          {
            $select_value=@$_POST["choose"];
            $input_fvalue=@$_POST["Fday"];
            $input_lvalue=@$_POST["Lday"];
            //echo $input_fvalue;
            $first = $input_fvalue;
            $last = $input_lvalue;
          }
          if(isset($_POST['specially']))
          {
            $select_value=$_POST['choose'];
            if ($select_value == 1) {
              $first=Date("Y-m-d");
              $last=Date("Y-m-d");
            }
            else if ($select_value == 2) {
              $d=strtotime("-7 Days");
              $first=date('Y-m-d', strtotime("-7 days"));
              $last=Date("Y-m-d");

            }
            else if ($select_value == 3) {
              $d=date("m");
              $first =date('Y-m-d', strtotime("-30 days"));
              $last =Date("Y-m-d");
            }
            else{
              $first = $input_fvalue;
              $last = $input_lvalue;
            }
          }
          if(isset($_POST['specially'])||isset($_POST['period']))
          {
            echo $first;
            echo $last;
            $order=GetOrderByDate($first,$last);
            for ($i=0; $i <count($order) ; $i++) {

              echo "<tr>";

              echo "<th class="."table-warning scope="."row".">".GetDvdInformation($order[$i]['id'])['Name']."</th>";
              echo "<td class="."table-warning>".$order[$i]['Count']."</td>";

              echo "</tr>";
              echo "</div>";
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
