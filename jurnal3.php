<?php 

$buku = [
    ["judul" => "Bersek",
    "Penulis" => "Miura Kentaro"
    ],
    ["judul" => "Oswald",
     "Penulis" => "Walt Disney"
    ],
];

//Tampil data
    echo "Menampilkan Data Awal" ;
 function tampil_data ($buku) {
    echo "<table border='1' cellspacing='0'>";
    echo "<tr> <th>judul</th><th>Penulis</th></tr>";
    echo "<br>";
    foreach($buku as $bk){
        echo"<tr>";
            echo"<td>{$bk['judul']}</td>";
            echo"<td>{$bk['Penulis']}</td>";
            echo"</tr>";
    }echo "</table> <br>";
}
    
echo tampil_data($buku);
echo "Menambahkan Buku Baru";
//Tambah data
$buku[] = ["judul" => "One Pice", "Penulis" => "Eiichiro Oda"];
tampil_data($buku);

echo "Memperbarui Buku dengan ID ke-2 ";
$buku[2] =["judul" => "Naruto", "Penulis" => "Masashi Kishimoto"];
tampil_data($buku);

echo "Memperbarui Buku dengan ID ke-1 ";
unset($buku[2]);
$buku = array_values($buku);
tampil_data($buku);

$caridata[2] = ["judul" => "Naruto", "Penulis" => "Masashi Kishimoto"];

echo "Mencari Buku dengan kata kunci 'Naruto'";
// $caridata = array_filter($buku, function($caridata) {
//     return $caridata;
// });
// tampil_data($buku);

function caridata($buku, $katakunci) {
    $hasilcari = [];
    foreach ($buku as $ bk) {
        if (strpos(strlower($bk['judul']), strlower($katakunci)) !== ||
            strpos(strlower($bk['Penulis'])) !== false) {
                $hasilcari[] =$b;
        }
    }
    return $hasil_cara
}



