<?php
//array 
$buah = ["apel" => 10000, 
        "pisang" => 5000, 
        "mangga" => 15000];



function ketersedian_buah ($buah,$inputbuah) {
    foreach ($buah as $key => $nama_buah)
        if($inputbuah == $key) {
            return true;
        }
    return false;
}

     

$inputbuah = strtolower(readline('pilih nama buah yang ingin dimasukkan:'));
$tersedia = ketersedian_buah ($buah,$inputbuah);

   
if ($tersedia == true) {
    $inputjumlah = (int) readline('masukkan jumlah buah:');
    $harga = $buah[$inputbuah];
    // $diskon = 0.5 * $harga; 
    
    // $total_diskon = $harga - $diskon;
    $total_harga = $inputjumlah * $harga; //$total_diskon;

    
    echo "total harga untuk $inputjumlah buah $inputbuah diberi diskon menjadi: $total_harga \n";
}
else {
    echo "buah tidak tersedia";
}












?>