
<?php // Tag pembuka PHP
require_once __DIR__ . '/Buku.php'; // Memuat Buku
require_once __DIR__ . '/Anggota.php'; // Memuat Anggota
class Perpustakaan { // Kelas Perpustakaan
    public array $koleksi = []; // Array Buku
    public array $anggota = []; // Array Anggota
    public function tambahBuku(Buku $b): void { // Tambah buku
        $this->koleksi[] = $b; // Dorong ke koleksi
    } // Menutup method
    public function tambahAnggota(Anggota $a): void { // Tambah anggota
        $this->anggota[] = $a; // Dorong ke anggota
    } // Menutup method
    public function pinjam(string $isbn): bool { // Pinjam buku
        foreach ($this->koleksi as $b) { // Iterasi koleksi
            if ($b->isbn === $isbn && !$b->dipinjam) { // Jika cocok dan tersedia
                $b->dipinjam = true; // Tandai dipinjam
                return true; // Berhasil
            } // Menutup if
        } // Menutup foreach
        return false; // Gagal
    } // Menutup method pinjam
    public function kembali(string $isbn): bool { // Kembalikan buku
        foreach ($this->koleksi as $b) { // Iterasi koleksi
            if ($b->isbn === $isbn && $b->dipinjam) { // Jika cocok dan sedang dipinjam
                $b->dipinjam = false; // Tandai kembali
                return true; // Berhasil
            } // Menutup if
        } // Menutup foreach
        return false; // Gagal
    } // Menutup method kembali
    public function tampilkan(): void { // Tampilkan data
        echo "== Koleksi ==" . PHP_EOL; // Header koleksi
        foreach ($this->koleksi as $b) { // Iterasi buku
            echo $b . PHP_EOL; // Cetak buku
        } // Menutup foreach
        echo "== Anggota ==" . PHP_EOL; // Header anggota
        foreach ($this->anggota as $a) { // Iterasi anggota
            echo $a . PHP_EOL; // Cetak anggota
        } // Menutup foreach
    } // Menutup method tampilkan
} // Menutup kelas Perpustakaan
