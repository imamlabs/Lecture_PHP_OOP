
<?php // Tag pembuka PHP
// Inheritance (Person -> Dosen)
class Person { // Kelas dasar Person
    protected string $nama; // Properti protected nama
    protected string $alamat; // Properti protected alamat
    public function __construct(string $nama, string $alamat) { // Constructor Person
        $this->nama = $nama; // Mengisi nama
        $this->alamat = $alamat; // Mengisi alamat
    } // Menutup constructor
    public function perkenalan(): void { // Method perkenalan
        echo "Saya " . $this->nama . " dari " . $this->alamat . PHP_EOL; // Cetak kalimat perkenalan
    } // Menutup method perkenalan
} // Menutup kelas Person
