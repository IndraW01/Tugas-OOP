<?php
// kelompok 7 //
// Duta Fiqri Rahman (004)
// Herniyanti (007)
// Viandra Trilia Arinzha (010)
// Harrys Qomarul Zamani (011)
// Aad Aries Suntara (016)
// Surya Nanda Oktaviani (020)
// Muhammad Ananda Faris H (022)
// Michael Dave Hutagaol (080)
// Marcelino Candra (088)

class bahasaDaerah {
    public $nama, $asal, $suku;

public function hello($nama,$asal,$suku){
    return "Apa habar kawalan? Ini bahasa daerah $nama dari $asal suku $suku";
}
}

$bahasa1 = new bahasaDaerah();
$bahasa1->nama = "Banjar";
$bahasa1->asal = "Kalimantan";
$bahasa1->suku = "Banjar";

echo"Data Bahasa    : ";
echo "<br />";
echo"Nama       : $bahasa1->nama";
echo "<br />";
echo"Asal       : $bahasa1->asal";
echo "<br />";
echo"Suku     : $bahasa1->suku";
echo "<br />";

echo "<br />";

echo $bahasa1->hello("Banjar", "Kalimantan", "Banjar");