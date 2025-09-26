
<?php // Tag pembuka PHP
require_once __DIR__ . '/Perpustakaan.php'; // Memuat Perpustakaan (yang memuat Buku & Anggota)
$lib = new Perpustakaan(); // Membuat objek perpustakaan
$lib->tambahBuku(new Buku("ISBN001","Pemrograman PHP","Andi")); // Menambah buku contoh
$lib->tambahAnggota(new Anggota("A01","Siti")); // Menambah anggota contoh
echo "Draft struktur proyek akhir dibuat." . PHP_EOL; // Cetak status
