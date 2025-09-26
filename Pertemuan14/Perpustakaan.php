
<?php // Tag pembuka PHP
require_once __DIR__ . '/Buku.php'; // Memuat Buku
require_once __DIR__ . '/Anggota.php'; // Memuat Anggota
class Perpustakaan { // Kelas Perpustakaan
    public array $koleksi = []; // Array koleksi Buku
    public array $anggota = []; // Array daftar Anggota
    public function tambahBuku(Buku $b): void { // Menambah buku
        $this->koleksi[] = $b; // Mendorong Buku ke koleksi
    } // Menutup method tambahBuku
    public function tambahAnggota(Anggota $a): void { // Menambah anggota
        $this->anggota[] = $a; // Mendorong Anggota ke daftar
    } // Menutup method tambahAnggota
} // Menutup kelas Perpustakaan
