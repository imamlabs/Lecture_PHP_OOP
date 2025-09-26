
<?php // Tag pembuka PHP
require_once __DIR__ . '/Jurusan.php'; // Memuat definisi Jurusan (enum atau fallback)
class Mahasiswa { // Kelas Mahasiswa
    private static int $COUNTER = 0; // Properti statik penghitung objek
    public const KAMPUS = "Universitas Contoh"; // Konstanta nama kampus
    private string $nama; // Properti nama
    private $jurusan; // Properti jurusan (enum atau string)
    public function __construct(string $nama, $jurusan) { // Constructor
        $this->nama = $nama; // Mengisi nama
        $this->jurusan = $jurusan; // Mengisi jurusan
        self::$COUNTER++; // Menambah penghitung objek
    } // Menutup constructor
    public static function getTotal(): int { // Method statik untuk total objek
        return self::$COUNTER; // Mengembalikan jumlah objek
    } // Menutup method statik
    public function info(): void { // Method menampilkan info
        $j = is_object($this->jurusan) ? $this->jurusan->name : $this->jurusan; // Ambil nama enum atau string
        echo $this->nama . " - " . $j . " @ " . self::KAMPUS . PHP_EOL; // Cetak informasi
    } // Menutup method info
} // Menutup kelas Mahasiswa
