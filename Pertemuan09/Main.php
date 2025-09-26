
<?php // Tag pembuka PHP
require_once __DIR__ . '/Persegi.php'; // Memuat Persegi (dan BangunDatar)
$p = new Persegi(5); // Membuat persegi sisi 5
$p->info(); // Menampilkan luas dan keliling
