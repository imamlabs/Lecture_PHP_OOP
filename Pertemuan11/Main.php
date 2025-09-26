
<?php // Tag pembuka PHP
require_once __DIR__ . '/Mahasiswa.php'; // Memuat Mahasiswa (yang memuat Jurusan)
if (function_exists('enum_exists') and enum_exists('Jurusan')) { // Jika enum ada
    $a = new Mahasiswa("Ari", Jurusan::INFORMATIKA); // Membuat objek a dengan enum
    $b = new Mahasiswa("Nina", Jurusan::SISTEM_INFORMASI); // Membuat objek b dengan enum
} else { // Jika fallback
    $a = new Mahasiswa("Ari", Jurusan::INFORMATIKA); // Membuat objek a dengan konstanta string
    $b = new Mahasiswa("Nina", Jurusan::SISTEM_INFORMASI); // Membuat objek b dengan konstanta string
} // Menutup kondisi
$a->info(); // Menampilkan info a
$b->info(); // Menampilkan info b
echo "Total objek Mahasiswa: " . Mahasiswa::getTotal() . PHP_EOL; // Menampilkan total objek
