<?php
// Koneksi ke database
$conn = new mysqli("localhost", "username_db", "password_db", "nama_db");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari form
$user_id = $_POST['user_id'];
$server = $_POST['server'];
$jumlah_diamond = $_POST['jumlah_diamond'];
$metode_pembayaran = $_POST['metode_pembayaran'];
$no_whatsapp = $_POST['no_whatsapp'];
$kode_promo = $_POST['kode_promo'];

// Query untuk insert data
$sql = "INSERT INTO pembelian (user_id, server, jumlah_diamond, metode_pembayaran, no_whatsapp, kode_promo)
        VALUES ('$user_id', '$server', '$jumlah_diamond', '$metode_pembayaran', '$no_whatsapp', '$kode_promo')";

if ($conn->query($sql) === TRUE) {
    echo "Pembelian berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
