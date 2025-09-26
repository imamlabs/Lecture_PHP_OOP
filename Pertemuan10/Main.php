
<?php // Tag pembuka PHP
require_once __DIR__ . '/Mobil.php'; // Memuat Mobil
require_once __DIR__ . '/Robot.php'; // Memuat Robot
$m1 = new Mobil(); // Membuat objek Mobil
$m2 = new Robot(); // Membuat objek Robot
$m1->move(); // Memanggil move pada Mobil
$m2->move(); // Memanggil move pada Robot
