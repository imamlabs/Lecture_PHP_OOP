
<?php // Tag pembuka PHP
// Mini Proyek Akhir: Kasir sederhana
class Barang { // Kelas Barang
    public string $kode; // Properti kode
    public string $nama; // Properti nama
    public float $harga; // Properti harga
    public function __construct(string $kode, string $nama, float $harga) { // Constructor
        $this->kode = $kode; // Mengisi kode
        $this->nama = $nama; // Mengisi nama
        $this->harga = $harga; // Mengisi harga
    } // Menutup constructor
    public function __toString(): string { // Representasi string
        return $this->kode . " - " . $this->nama . " (Rp" . $this->harga . ")"; // Susun teks barang
    } // Menutup method __toString
} // Menutup kelas Barang
