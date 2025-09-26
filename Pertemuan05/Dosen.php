
<?php // Tag pembuka PHP
require_once __DIR__ . '/Person.php'; // Memuat kelas Person
class Dosen extends Person { // Kelas Dosen mewarisi Person
    private string $nidn; // Properti khusus Dosen: NIDN
    public function __construct(string $nama, string $alamat, string $nidn) { // Constructor Dosen
        parent::__construct($nama, $alamat); // Memanggil constructor induk
        $this->nidn = $nidn; // Mengisi NIDN
    } // Menutup constructor
    public function perkenalan(): void { // Override perkenalan
        echo "Saya Dosen " . $this->nama . " (NIDN: " . $this->nidn . ") dari " . $this->alamat . PHP_EOL; // Cetak perkenalan versi Dosen
    } // Menutup method perkenalan
} // Menutup kelas Dosen
