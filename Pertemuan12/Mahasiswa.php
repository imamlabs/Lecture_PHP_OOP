
<?php // Tag pembuka PHP
// Collection: array of objects
class Mahasiswa { // Kelas Mahasiswa sederhana
    public string $nim; // Properti nim
    public string $nama; // Properti nama
    public function __construct(string $nim, string $nama) { // Constructor
        $this->nim = $nim; // Mengisi nim
        $this->nama = $nama; // Mengisi nama
    } // Menutup constructor
    public function __toString(): string { // Representasi string
        return $this->nim . " - " . $this->nama; // Menggabungkan nim dan nama
    } // Menutup method __toString
} // Menutup kelas Mahasiswa
