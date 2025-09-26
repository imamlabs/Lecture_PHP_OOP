
<?php // Tag pembuka PHP
class Anggota { // Kelas Anggota
    public string $id; // Properti id
    public string $nama; // Properti nama
    public function __construct(string $id, string $nama) { // Constructor
        $this->id = $id; // Mengisi id
        $this->nama = $nama; // Mengisi nama
    } // Menutup constructor
    public function __toString(): string { // Representasi string
        return $this->id . " - " . $this->nama; // Susun teks
    } // Menutup method __toString
} // Menutup kelas Anggota
