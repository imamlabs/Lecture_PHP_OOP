
<?php // Tag pembuka PHP
// Abstraction (abstract class)
abstract class BangunDatar { // Kelas abstrak
    abstract public function hitungLuas(): float; // Method abstrak hitungLuas
    abstract public function hitungKeliling(): float; // Method abstrak hitungKeliling
    public function info(): void { // Method konkrit menampilkan hasil
        echo "Luas: " . $this->hitungLuas() . PHP_EOL; // Cetak luas
        echo "Keliling: " . $this->hitungKeliling() . PHP_EOL; // Cetak keliling
    } // Menutup method info
} // Menutup kelas BangunDatar
