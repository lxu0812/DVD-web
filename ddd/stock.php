<!DOCTYPE html>
<?php
include("db.php");
/*
for($i=1;$i<=96;$i++)
{
$dvd=GetDvdInformation($i);
echo $dvd['Id'],",,",$dvd['Id'],",,",rand(0,5),",,,",$dvd['Price'];
AddStroage(1,$dvd['Id'],rand(0,5),$dvd['Price']);
}*/
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DVD Stock</title>
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

  <?php include("Menu.php"); ?>
  <div class="container">
    <div class="row">
      <div class="header">
        <div class="title">
          <h1><a href="index.php" target="DVD Store">NTUT </a></h1>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-3">
          <button type ="button" class="btn btn-primary btn-lg" onclick="window.open('insert_window.php','edit_window',config='height=400,width=1400')" >insert-DVD</button>
        </div>
      <div class="col-lg-3">
          <button type ="button" class="btn btn-primary btn-lg" onclick="window.open('list_window.php','list_window',config='height=400,width=1400')" >checking-order</button>
        </div>
      <div class="col-lg-3">
          <?php
          if(GetStatus()==2)
            echo "<button type='button' class='btn btn-primary btn-lg' onclick="."window.open('people_window.php','people_window',config='height=400,width=1400')"."> insert-member</button>";
         ?>
      </div>
      <div class="col-lg-3">
          <button type ="button" class="btn btn-primary btn-lg" onclick="window.open('Report.php',config='height=400,width=1400')" >Report</button>
        </div>
    </div>

    <div class="row">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"  >ID</th>
            <th scope="col"  >Name</th>
            <th scope="col"  >Price</th>
            <th scope="col"  >Quantity</th>
            <th scope="col"  >State</th>
            <?php
            if(GetStatus()!=0)
              echo "<th scope='col'>Edit</th>";
            ?>
          </tr>
        </thead>
        <tbody>
            <?php
            $stroge=GetStroge();
            for($i=0;$i<count($stroge);$i++):
            $Id=$i+1;
            ?>
            <tr>
            <td class="table-warning" ><?= $stroge[$i]['DVD_Id']?></td>
            <td class="table-warning" ><?= GetDvdInformation($stroge[$i]['DVD_Id'])['Name']?></td>
            <td class="table-warning" ><?= $stroge[$i]['Cost']?></td>
            <td class="table-warning"><?= $stroge[$i]['Quantity']?></td>
            <td class="table-warning"><?= $stroge[$i]['Quantity'] ?></td>
            <?php
            if(GetStatus()!=0)
            echo "<td scope='col' style='1rem'>";
            echo "<button type='button' class='btn btn-primary btn-lg' onclick="."window.open('edit_window.php?Id=$Id',config='height=400,width=1400')"."> Edit</button>";
            echo"</td>";
            echo "</tr>";
            endfor;
            ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php
  //include("below.php");
  ?>
</body>
</html>
