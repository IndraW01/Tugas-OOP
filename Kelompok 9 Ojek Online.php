<?php
// Nama Kelompok ://
// Mohammad Ichsan M (003)
// Eky Presetya (023)
// Multy Agreani(038)
// Muhammad Alfitriansyah (040)
// Indra Wijaya (042)
// Jeroline Betsy Angela (043)
// Faris Praditya (060)
// Irfan Zaky (061)
// Sapna Yolandani (089)
// Adella Ayu (099)
// Ayzra Yuka (072)

class OjekOnline {
    Public $kendaraan, $nama, $plat, $tujuan, $harga;

    public function __construct($kendaraan="kendaraan", $nama="nama", $plat="plat", $tujuan="tujuan", $harga="harga"){
        $this->kendaraan = $kendaraan;
        $this->nama = $nama;
        $this->plat = $plat;
        $this->tujuan = $tujuan;
        $this->harga = $harga;
    }

    public function getlabel(){
        return "$this->nama, $this->plat, $this->tujuan";
    }
}

//class tipe data
    class cetakinfoojol {
        public function cetak( OjekOnline $ojol) {
           $str = "{$ojol->kendaraan} | {$ojol->getlabel()} (Rp.{$ojol->harga})";
           return $str;
        }
    }


$OjekOnline1 = new OjekOnline("Motor", "Indra", "KT 104", "Pramuka 6", 10000);
$OjekOnline2 = new OjekOnline("Motor", "Alpit", "KT 105", "Perjuangan 2", 20000);
// $OjekOnline1->kendaraan    = "Motor";
// $OjekOnline1->nama         = "Indra";
// $OjekOnline1->plat         = "KT 104";
// $OjekOnline1->tujuan       = "Pramuka 6";
// $OjekOnline1->harga        = "10000";

//Memanggil Menggunakan Constructor dan Method
echo "Data ojek 1 : ".$OjekOnline1->getlabel();
echo"</br>";
echo "Data ojek 2 : ".$OjekOnline2->getlabel();
echo"</br>";

$infodataojek1 = new cetakinfoojol();
echo $infodataojek1->cetak($OjekOnline1);
echo "</br>";
$infodataojek2 = new cetakinfoojol();
echo $infodataojek2->cetak($OjekOnline2);

//Memanggil Object tidak menggunakan Constructor dan method
// echo "Kendaraan : $OjekOnline1->kendaraan";
// echo "<br />";
// echo "Nama Ojol : $OjekOnline1->nama";
// echo "<br />";
// echo "Plat      : $OjekOnline1->plat";
// echo "<br />";
// echo "Tujuann   : $OjekOnline1->tujuan";
// echo "<br />";
// echo "Harga     : $OjekOnline1->harga";
// echo "<br />";
// var_dump($OjekOnline1);
?>