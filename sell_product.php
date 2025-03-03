<?php
$conn = new mysqli("localhost", "root", "", "product_db");

$id = $_POST['id'];
$quantity = $_POST['quantity'];

$sql = "UPDATE products SET stock = stock - $quantity WHERE id = $id AND stock >= $quantity";
$conn->query($sql);

echo json_encode(["message" => "Produk berhasil dijual!"]);
?>
