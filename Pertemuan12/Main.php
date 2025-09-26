
<?php // Tag pembuka PHP
require_once __DIR__ . '/Mahasiswa.php'; // Memuat kelas Mahasiswa
$daftar = []; // Array untuk menampung objek Mahasiswa
$stdin = fopen("php://stdin", "r"); // Membuka input standar untuk CLI
while (true) { // Perulangan menu
    echo "1. Tambah  2. Hapus  3. Tampil  0. Keluar" . PHP_EOL; // Menampilkan menu
    $pilih = trim(fgets($stdin)); // Membaca pilihan
    if ($pilih === "1") { // Jika memilih tambah
        echo "NIM: "; // Minta NIM
        $nim = trim(fgets($stdin)); // Baca NIM
        echo "Nama: "; // Minta Nama
        $nama = trim(fgets($stdin)); // Baca Nama
        $daftar[] = new Mahasiswa($nim, $nama); // Tambahkan objek baru
    } elseif ($pilih === "2") { // Jika memilih hapus
        echo "Index hapus: "; // Minta index
        $idx = (int)trim(fgets($stdin)); // Baca index
        if ($idx >= 0 && $idx < count($daftar)) { // Validasi index
            array_splice($daftar, $idx, 1); // Hapus elemen di index
        } // Menutup if
    } elseif ($pilih === "3") { // Jika memilih tampil
        foreach ($daftar as $i => $m) { // Iterasi data
            echo $i . ". " . $m . PHP_EOL; // Cetak index dan data
        } // Menutup foreach
    } elseif ($pilih === "0") { // Jika memilih keluar
        break; // Keluar dari loop
    } // Menutup blok kondisi
} // Menutup while
