<?php

$jambu1 = 15000;
$jambu2 = 2000;
$dus1 = 6;
$dus2 = 5*$dus1;
$penjualan = ($jambu1 * $dus2)+($jambu2*$dus1);


echo "======================================== <br>";
echo "Harga Jambu = Rp $jambu1 /Kg, <br>" ;
echo "Harga Kardus = Rp $jambu2 /pcs, <br>";
echo "Total Penjualan (Dus dan Jambu) = Rp ".$penjualan, "<br>";
echo "========================================";

?>
