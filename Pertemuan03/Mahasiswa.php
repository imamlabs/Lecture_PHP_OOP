
<?php // Tag pembuka PHP
// Constructor & $this
class Mahasiswa { // Kelas Mahasiswa
    private string $nim; // Properti private nim
    private string $nama; // Properti private nama
    private string $jurusan; // Properti private jurusan
    public function __construct(string $nim = "", string $nama = "Tanpa Nama", string $jurusan = "-") { // Constructor dengan default
        $this->nim = $nim; // Mengisi nim
        $this->nama = $nama; // Mengisi nama
        $this->jurusan = $jurusan; // Mengisi jurusan
    } // Menutup constructor
    public function info(): void { // Method info
        echo "(" . $this->nim . ") " . $this->nama . " - " . $this->jurusan . PHP_EOL; // Cetak informasi singkat
    } // Menutup method info
} // Menutup kelas Mahasiswa
