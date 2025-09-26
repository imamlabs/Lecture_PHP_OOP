
<?php // Tag pembuka PHP
require_once __DIR__ . '/Mahasiswa.php'; // Memuat kelas Mahasiswa
$a = new Mahasiswa(); // Membuat objek a dengan nilai default
$b = new Mahasiswa("2310001","Rina","Informatika"); // Membuat objek b dengan data awal
$a->info(); // Menampilkan info a
$b->info(); // Menampilkan info b
