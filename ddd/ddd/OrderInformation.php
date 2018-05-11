<?php
$id=GetSession();
if(GetStatus()==0)
  $order=GetOrderlistById($id);
else
  $order=GetOrderList();
for ($i=0; $i <count($order) ; $i++) {
  $dvd=GetDVDByOrderId($order[$i]['Id']);
  $name="";
  $price="";
  $quantity="";
  for($j=0;$j<count($dvd);$j++)
  {
    $name=$name.GetDvdInformation($dvd[$j]['DVD_Id'])['Name']."<br>";
    $price=$price.GetDvdInformation($dvd[$j]['DVD_Id'])['Price']."<br>";
    $quantity=$quantity.$dvd[$j]['Quantity']."<br>";
  }
  echo "<tr>";
  $index=(int)$i+1;
  echo "<th class="."table-warning scope="."row".">".$index."</th>";
  echo "<td class="."table-warning>".$order[$i]['Member_Id']."</td>";
//  echo "<td> ".$i."</td>";
  echo "<td class="."table-warning> ".$name."</td>";
  echo "<td class="."table-warning> ".$price."</td>";
    echo "<td class="."table-warning> ".$quantity."</td>";
  echo "<td class="."table-warning>".$order[$i]['Cost']."</td>";
  if($order[$i]['State']==0)
    echo "<td class="."table-warning>"."Processing"."</td>";
  else if($order[$i]['State']==1)
    echo "<td class="."table-warning>"."Shipping"."</td>";
  else if($order[$i]['State']==2)
    echo "<td class="."table-warning>"."Received"."</td>";
  else if($order[$i]['State']==3)
    echo "<td class="."table-warning>"."Closed"."</td>";
  echo "<td class="."table-warning>".$order[$i]['Date_Time']."</td>";
  if(GetStatus()!=0)
    echo "<td ><input class="."fix-button"." type ="."button"." onclick="."window.open('state_window.php?Id=$i','state_window',config='height=300,width=300')"." value= edit></input></td>";
  echo "</tr>";
  echo "</div>";
}
?>
