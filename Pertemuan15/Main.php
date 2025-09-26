
<?php // Tag pembuka PHP
require_once __DIR__ . '/Perpustakaan.php'; // Memuat Perpustakaan (yang memuat Buku & Anggota)
$lib = new Perpustakaan(); // Membuat perpustakaan
$lib->tambahBuku(new Buku("B001","PHP Dasar","Andi")); // Menambah buku 1
$lib->tambahBuku(new Buku("B002","Struktur Data","Budi")); // Menambah buku 2
$lib->tambahAnggota(new Anggota("AG01","Rina")); // Menambah anggota 1
$lib->tambahAnggota(new Anggota("AG02","Tono")); // Menambah anggota 2
$lib->tampilkan(); // Menampilkan data awal
echo "-- Pinjam B001 -- " . ($lib->pinjam("B001") ? "Sukses" : "Gagal") . PHP_EOL; // Uji meminjam
$lib->tampilkan(); // Menampilkan data setelah pinjam
echo "-- Kembali B001 -- " . ($lib->kembali("B001") ? "Sukses" : "Gagal") . PHP_EOL; // Uji pengembalian
$lib->tampilkan(); // Menampilkan data akhir
