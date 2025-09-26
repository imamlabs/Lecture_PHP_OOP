
<?php // Tag pembuka PHP
require_once __DIR__ . '/IMovable.php'; // Memuat interface IMovable
class Mobil implements IMovable { // Kelas Mobil mengimplementasikan IMovable
    public function move(): void { // Implementasi method move
        echo "Mobil bergerak dengan roda." . PHP_EOL; // Cetak cara bergerak mobil
    } // Menutup method move
} // Menutup kelas Mobil
