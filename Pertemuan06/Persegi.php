
<?php // Tag pembuka PHP
require_once __DIR__ . '/BangunDatar.php'; // Memuat BangunDatar
class Persegi extends BangunDatar { // Kelas Persegi turunan BangunDatar
    public float $sisi; // Properti sisi
    public function __construct(float $sisi) { // Constructor
        $this->sisi = $sisi; // Menetapkan sisi
    } // Menutup constructor
    public function hitungLuas(): float { // Override hitungLuas
        return $this->sisi * $this->sisi; // Mengembalikan luas persegi
    } // Menutup method
} // Menutup kelas Persegi
