
<?php // Tag pembuka PHP
require_once __DIR__ . '/BangunDatar.php'; // Memuat kelas abstrak BangunDatar
class Persegi extends BangunDatar { // Subclass Persegi
    public float $sisi; // Properti sisi
    public function __construct(float $sisi) { // Constructor
        $this->sisi = $sisi; // Menetapkan sisi
    } // Menutup constructor
    public function hitungLuas(): float { // Implementasi luas
        return $this->sisi * $this->sisi; // Luas persegi
    } // Menutup method hitungLuas
    public function hitungKeliling(): float { // Implementasi keliling
        return 4 * $this->sisi; // Keliling persegi
    } // Menutup method hitungKeliling
} // Menutup kelas Persegi
