<?php
$conn = new mysqli("localhost", "root", "", "product_db");

if ($conn->connect_error) {
    die(json_encode(["error" => "Koneksi database gagal: " . $conn->connect_error]));
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

header('Content-Type: application/json');
echo json_encode($products);
?>
