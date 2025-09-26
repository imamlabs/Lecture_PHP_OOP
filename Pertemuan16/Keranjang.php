
<?php // Tag pembuka PHP
require_once __DIR__ . '/Barang.php'; // Memuat Barang
class Keranjang { // Kelas Keranjang
    public array $items = []; // Array kode => qty
    public function tambah(Barang $b, int $qty): void { // Menambah item ke keranjang
        $this->items[$b->kode] = ($this->items[$b->kode] ?? 0) + $qty; // Menambahkan qty berdasarkan kode
    } // Menutup method tambah
    public function total(array $katalog): float { // Menghitung total belanja
        $sum = 0; // Inisialisasi total
        foreach ($this->items as $kode => $qty) { // Iterasi setiap item
            $sum += $katalog[$kode]->harga * $qty; // Menambahkan subtotal (harga*qty)
        } // Menutup foreach
        return $sum; // Mengembalikan total
    } // Menutup method total
} // Menutup kelas Keranjang
