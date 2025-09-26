
<?php // Tag pembuka PHP
// Kuis mini: AkunBank
class AkunBank { // Kelas AkunBank
    private string $nomor; // Properti nomor rekening
    private float $saldo; // Properti saldo
    public function __construct(string $nomor, float $saldoAwal) { // Constructor
        $this->nomor = $nomor; // Menetapkan nomor
        $this->saldo = max(0, $saldoAwal); // Menetapkan saldo minimal 0
    } // Menutup constructor
    public function setor(float $nominal): void { // Method setor
        if ($nominal <= 0) { // Validasi nominal harus > 0
            throw new InvalidArgumentException("Nominal setor harus > 0"); // Lempar exception jika invalid
        } // Menutup if
        $this->saldo += $nominal; // Menambahkan saldo
    } // Menutup method setor
    public function tarik(float $nominal): void { // Method tarik
        if ($nominal <= 0) { // Validasi nominal harus > 0
            throw new InvalidArgumentException("Nominal tarik harus > 0"); // Lempar exception jika invalid
        } // Menutup if
        if ($nominal > $this->saldo) { // Cek saldo mencukupi
            throw new InvalidArgumentException("Saldo tidak cukup"); // Lempar exception jika kurang
        } // Menutup if
        $this->saldo -= $nominal; // Mengurangi saldo
    } // Menutup method tarik
    public function info(): void { // Method info
        echo "Akun " . $this->nomor . " | Saldo: " . $this->saldo . PHP_EOL; // Cetak info akun
    } // Menutup method info
} // Menutup kelas AkunBank
