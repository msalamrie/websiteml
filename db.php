<?php
$host = '127.0.0.1'; // alamat localhost
$dbname = 'daftar'; // nama database
$username = 'root'; // username MySQL (default untuk Laragon adalah root)
$password = 'MySQL2024'; // password MySQL (default kosong)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Koneksi gagal: ' . $e->getMessage();
}
?>
