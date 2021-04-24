<?php
class motorYamaha
{ //properti
    public $jenis, $warna, $tahun, $bb, $spesifikasi;
    //methode
    public function spesifikasi ()
    {
        return " <br/>1. Mesin motor didesain lebih cepat <br/>2. Desain motor modern <br/>3. Hemat bahan bakar";
    }
    public function kekurangan()
    {
        echo "<br/>1. Harga Cukup Tinggi <br/>2. Biaya Perawatan tinggi <br/>3. Sparepart Terbatas";
    }
    public function awal()
    {
        return "Motor Yamaha : ";
    }
    public function awal2()
    {
        return $this ->spesifikasi;
    }
    public function awal3()
    {
        echo "Namun juga memeliki kekurangan sebagai berikut";
    }

}
//instansiasi class motor
$motor1 = new motorYamaha ();
$motor1 ->jenis = "JENIS : XEON (MATIC)";
$motor1 ->warna = " WARNA : HITAM";
$motor1 ->tahun = "TAHUN : 2020";
$motor1 ->bb = "BAHAN BAKAR : PERTALITE";
$motor1 ->spesifikasi ="Mempunyai kelebihan sebagai berikut: ";
// menampilkan instansiasi class motor
echo "
<br/> KELOMPOK 2 (MOTOR)
<br/>Asorfi Afrizaldi 
<br/>kesya Kurniati Awallus Saidah 
<br/> Yuvanda Ramadhani 
<br/>Diva Fitri Mellani 
<br/> Rizky Syawal 
<br/> Nazilla Fairuz
<br/> Bella Theressa
<br/> Nadya Puspita Sari
<br/> Fernanda M
<br/> Rara puspa aisyah
<br/> Hazeem Abdullah";
echo "<br/>";
echo "<br/>";
echo $motor1 ->awal();
echo "<br/>";
echo $motor1->jenis;
echo "<br/>";
echo $motor1 ->warna;
echo "<br/>";
echo $motor1 ->tahun;
echo "<br/>";
echo $motor1 ->bb;
echo "<br/>";
echo "<br/>";
echo $motor1 ->awal2();
echo $motor1 ->spesifikasi();
echo "<br/>";
echo "<br/>";
echo $motor1 ->awal3();
echo $motor1 ->kekurangan();

?>