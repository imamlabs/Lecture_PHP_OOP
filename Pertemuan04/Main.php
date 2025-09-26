
<?php // Tag pembuka PHP
require_once __DIR__ . '/Mahasiswa.php'; // Memuat kelas Mahasiswa
$m = new Mahasiswa(); // Membuat objek m
$m->setNim("2312345"); // Mengatur nim via setter
$m->setNama("Budi"); // Mengatur nama via setter
$m->info(); // Menampilkan informasi m
