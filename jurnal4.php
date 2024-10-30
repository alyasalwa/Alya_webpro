<?php

$barang = [
    ["ID" => 1, "nama" => "Buku", "kategori" => "Alat Tulis", "harga" => 20000, "stok" => 10],
    ["ID" => 2, "nama" => "Pulpen", "kategori" => "Alat Tulis", "harga" => 5000, "stok" => 20],
];

//create
if(isset($_POST['create'])) {
    $id = count($barang)+ 1;
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];

    echo count($barang);

    $barang[] = ["ID" => $id, "nama" => $nama, "kategori" => $kategori, "harga" => $harga];
}

//delete 
if(isset($_POST['delete'])) {
    $index = $_POST['delete'];
    foreach($barang as $item => $i) {
        if ($i ["ID"] == $id)
            unset($barang[$item]);
            $barang = array_values($barang);
    }
}

//edit
if(isset($_POST['edit'])) {
    $id = $_POST['ID'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $barang[] = ["ID" => $id, "nama" => $nama, "kategori" => $kategori, "harga" => $harga]; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal">
    <title>Modul4</title>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="" method="POST">
        <label for ="nama">Nama Barang </label><br> 
        <input type="text" id="nama" name="nama" required> <br>

        <label for ="kategori">kategori</label><br>
        <input type="text" id="kategori" name="kategori" required> <br>

        <label for ="harga">Harga Barang</label><br>
        <input type="text" name="harga"><br>
        <!-- element html untuk submit form type submit -->
        <button type="submit" name="create" value="Tambah Barang"> Tambah </button> <br></br>
    </form>
</body>
</html>
<?php
echo"<table border= '1'>";
echo"<tr><th>ID</th><th>Nama Barang</th><th>kategori</th><th>Harga Barang<th>Aksi</th><tr>";
foreach($barang as $brg => $b) {
    echo"<tr>";
        echo"<td>{$b['ID']}</td>";
        echo"<td>{$b['nama']}</td>";
        echo"<td>{$b['kategori']}</td>";
        echo"<td>{$b['harga']}</td>";
        echo"<td><form action='' method='POST' style='display:inline-block;'>
        <input type='hidden' name='delete' value='{$id}'>
        <input type='submit' value='edit hapus'></form>
    </td>";
    }echo"</tr>";
?>


