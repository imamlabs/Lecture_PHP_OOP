
<?php // Tag pembuka PHP
require_once __DIR__ . '/BangunDatar.php'; // Memuat BangunDatar
class Segitiga extends BangunDatar { // Kelas Segitiga turunan BangunDatar
    public float $alas; // Properti alas
    public float $tinggi; // Properti tinggi
    public function __construct(float $alas, float $tinggi) { // Constructor
        $this->alas = $alas; // Menetapkan alas
        $this->tinggi = $tinggi; // Menetapkan tinggi
    } // Menutup constructor
    public function hitungLuas(): float { // Override hitungLuas
        return 0.5 * $this->alas * $this->tinggi; // Mengembalikan luas segitiga
    } // Menutup method
} // Menutup kelas Segitiga
