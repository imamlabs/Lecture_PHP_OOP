
<?php // Tag pembuka PHP
// Kelas Mahasiswa untuk demonstrasi Class dan Object
class Mahasiswa { // Mendefinisikan kelas Mahasiswa
    public string $nim; // Properti publik nim
    public string $nama; // Properti publik nama
    public string $jurusan; // Properti publik jurusan
    public function belajar(string $materi): void { // Method belajar dengan parameter materi
        echo $this->nama . " sedang belajar " . $materi . PHP_EOL; // Cetak aktivitas belajar
    } // Menutup method belajar
    public function tampilkanInfo(): void { // Method untuk menampilkan info mahasiswa
        echo "NIM     : {$this->nim}" . PHP_EOL; // Cetak nim
        echo "Nama    : {$this->nama}" . PHP_EOL; // Cetak nama
        echo "Jurusan : {$this->jurusan}" . PHP_EOL; // Cetak jurusan
    } // Menutup method tampilkanInfo
} // Menutup kelas Mahasiswa
