
<?php // Tag pembuka PHP
// Desain Proyek Akhir (draft): Sistem Perpustakaan
class Buku { // Kelas Buku
    public string $isbn; // Properti isbn
    public string $judul; // Properti judul
    public string $penulis; // Properti penulis
    public bool $dipinjam = false; // Status pinjam default
    public function __construct(string $isbn, string $judul, string $penulis) { // Constructor
        $this->isbn = $isbn; // Mengisi isbn
        $this->judul = $judul; // Mengisi judul
        $this->penulis = $penulis; // Mengisi penulis
    } // Menutup constructor
    public function __toString(): string { // Representasi string
        return "[" . $this->isbn . "] " . $this->judul . " - " . $this->penulis . ($this->dipinjam ? " (Dipinjam)" : ""); // Susun teks
    } // Menutup method __toString
} // Menutup kelas Buku
