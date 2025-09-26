
<?php // Tag pembuka PHP
// Encapsulation (getter/setter + validasi)
class Mahasiswa { // Kelas Mahasiswa terenkapsulasi
    private string $nim; // Properti private nim
    private string $nama; // Properti private nama
    public function getNim(): string { // Getter nim
        return $this->nim; // Mengembalikan nilai nim
    } // Menutup getter nim
    public function getNama(): string { // Getter nama
        return $this->nama; // Mengembalikan nilai nama
    } // Menutup getter nama
    public function setNim(string $nim): void { // Setter nim
        if (trim($nim) === "") { // Validasi nim tidak kosong
            throw new InvalidArgumentException("NIM tidak boleh kosong"); // Melempar exception jika invalid
        } // Menutup if
        $this->nim = $nim; // Menetapkan nim
    } // Menutup setter nim
    public function setNama(string $nama): void { // Setter nama
        if (mb_strlen(trim($nama)) < 2) { // Validasi panjang minimal 2
            throw new InvalidArgumentException("Nama minimal 2 karakter"); // Melempar exception jika invalid
        } // Menutup if
        $this->nama = $nama; // Menetapkan nama
    } // Menutup setter nama
    public function info(): void { // Method info
        echo $this->nim . " - " . $this->nama . PHP_EOL; // Cetak nim - nama
    } // Menutup method info
} // Menutup kelas Mahasiswa
