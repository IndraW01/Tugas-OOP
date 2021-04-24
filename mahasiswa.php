<?php

class Mahasiswa {
   public $nama,
          $nim,
          $jeniskelamin, 
          $alamat,
          $ukt;

   public function __Construct($nama="nama" , $nim="nim" , $jeniskelamin="jenis kelamin", $alamat="alamat rumah", $ukt="ukt") {
       $this->nama = $nama;
       $this->nim  = $nim;
       $this->jeniskelamin = $jeniskelamin;
       $this->alamat= $alamat;
       $this->ukt=$ukt;

   }
   public function getlabel() {
      return "$this->nim, $this->jeniskelamin, $this->alamat";
   }

}
   class cetakinfomahasiswa {
      public function cetak( Mahasiswa $mahasiswa) {
         $str = "{$mahasiswa->nama} | {$mahasiswa->getlabel()} (Rp.{$mahasiswa->ukt})";
         return $str;
      }

}

$mahasiswaSI = new Mahasiswa("indra", "001", "laki-laki", "Jl. Kapaas", 40000000);
$mahasiswaINF = new Mahasiswa("indah", "002", "perempuan", "Jl. bunga", 50000000);

echo "Datamahasiswa1:".$mahasiswaSI->getlabel();
echo"</br>";
echo "Datamahasiswa2 :".$mahasiswaINF->getlabel();
echo "</br>";

//Menggunakan Class tambahan
$infomahasiswaSI = new cetakinfomahasiswa();
echo $infomahasiswaSI->cetak($mahasiswaSI);
echo "</br>";
$infomahasiswaINF = new cetakinfomahasiswa();
echo $infomahasiswaINF->cetak($mahasiswaINF);

