<?php
 class voucher {
    Public $topup, $game, $jumlah, $harga;

}

$voucher1 = new voucher();
$voucher1->topup  = "Di Coda Shop";
$voucher1->game   = "PUBGM";
$voucher1->jumlah = "1000 UC";
$voucher1->harga  = "500000";

echo "Top up : $voucher1->topup";
echo "<br />";
echo "Game : $voucher1->game";
echo "<br />";
echo "Total : $voucher1->jumlah";
echo "<br />";
echo "Harga : $voucher1->harga";
echo "<br />";
var_dump($voucher1);

?>