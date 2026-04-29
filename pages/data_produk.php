<?php
include "../config/koneksi.php";

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);

$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
        "id" => $row["id_produk"],
        "name" => $row["nama_produk"],
        "price" => $row["harga"],
        "cat" => $row["brand"],
        "img" => "img/" . $row["GAMBAR"]
    ];
}

header('Content-Type: application/json');
echo json_encode($data);
?>