<?php
    //function
    // function coba($nama, $alamat){
    //     echo $nama.'</br>';
    //     echo $alamat;
    // }
    // coba('Indra', 'DI Samboja');

    //perulangan array foreach
    $data = ['nama'=>'Indra','alamat'=>'di samboja', 'nilai'=>80, 'umur'=>18];
    foreach ($data as $key => $values){
        echo $key.' = '. $values. '</br>';
    }
    
    if($data['nilai'] > 85){
        echo "nilai A";
     }elseif(($data['nilai'] > 75) AND ($data['nilai'] < 85)) {
       echo "nilai cukup";
     }else{
         echo "Maaf Anda Tidak Lulus";
     }
     echo "<br />";
     if($data['umur'] > 17){
        echo "Anda Bisa Kuliah";
     }
     elseif($data['umur'] < 17){
        echo "Anda Tidak Bisa Kuliah";
     }else{
        echo "Maaf Anda gak punya umur";
     }

    // foreach ($data as $key => $values){
    //     echo $key.'='. $values. '</br>';
    // }

    // $data= [
    //         'mobil'=>[
    //             'ban',
    //             'pintu',
    //             'spion',
    //         ],
    //         motor
    // ]

//     $data = ['nama'=>'indra','alamat'=>'di samboja', 'nilai'=>80, 'umur'=>18];
//     $nilai;
//     if($nilai> 85){
//         echo "Anda mendapat nilai A";
//     }
//     elseif($nilai<=80){
//         echo "Nilai anda pas";
//     }

// 
?>