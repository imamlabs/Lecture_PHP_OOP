
<?php // Tag pembuka PHP
require_once __DIR__ . '/Persegi.php'; // Memuat Persegi (yang juga memuat BangunDatar)
require_once __DIR__ . '/Segitiga.php'; // Memuat Segitiga (yang juga memuat BangunDatar)
$data = [ // Membuat array objek-objek bangun datar
    new Persegi(4), // Objek persegi sisi 4
    new Segitiga(3,6), // Objek segitiga alas 3 tinggi 6
    new Persegi(7) // Objek persegi sisi 7
]; // Menutup array
foreach ($data as $b) { // Iterasi setiap objek
    echo "Luas: " . $b->hitungLuas() . PHP_EOL; // Polimorfisme memanggil metode sesuai tipe objek
} // Menutup perulangan
