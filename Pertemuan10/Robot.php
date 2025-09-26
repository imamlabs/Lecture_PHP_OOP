
<?php // Tag pembuka PHP
require_once __DIR__ . '/IMovable.php'; // Memuat interface IMovable
class Robot implements IMovable { // Kelas Robot mengimplementasikan IMovable
    public function move(): void { // Implementasi method move
        echo "Robot berjalan dengan servo motor." . PHP_EOL; // Cetak cara bergerak robot
    } // Menutup method move
} // Menutup kelas Robot
