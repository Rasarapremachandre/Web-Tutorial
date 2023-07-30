<?php
function calculateElectricityBill($unit)
{
    if ($unit <= 50) 
    {
        $bill = $unit * 3.50;
    } 
   else if ($unit <= 100)
    {
        $bill = 50 * 3.50 + ($unit - 50) * 4.00;
    } 
  else if ($unit <= 150) 
     {
        $bill = 50 * 3.50 + 50 * 4.00 + ($unit - 100) * 5.20;
     } 
  else 
    {
        $bill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($unit - 150) * 6.50;
    }
    return $bill;
}
$unitConsumed = 200;
$totalBill = calculateElectricityBill($unitConsumed);
echo "Total electricity bill for {$unitConsumed} units: Rs. {$totalBill}";
?>