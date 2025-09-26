
<?php // Tag pembuka PHP
require_once __DIR__ . '/Keranjang.php'; // Memuat Keranjang (yang memuat Barang)
$katalog = [ // Membuat katalog barang
    "P01" => new Barang("P01","Pulpen", 3000), // Barang Pulpen
    "B02" => new Barang("B02","Buku Tulis", 7000), // Barang Buku Tulis
    "R03" => new Barang("R03","Rautan", 2000) // Barang Rautan
]; // Menutup array katalog
$k = new Keranjang(); // Membuat keranjang baru
$k->tambah($katalog["P01"], 2); // Menambah 2 Pulpen
$k->tambah($katalog["B02"], 1); // Menambah 1 Buku Tulis
echo "Total belanja: Rp" . $k->total($katalog) . PHP_EOL; // Mencetak total belanja
