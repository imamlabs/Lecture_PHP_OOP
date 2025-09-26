
<?php // Tag pembuka PHP
require_once __DIR__ . '/Person.php'; // Memuat Person
require_once __DIR__ . '/Dosen.php'; // Memuat Dosen
$p = new Person("Andi","Tangerang"); // Membuat objek Person
$d = new Dosen("Imam","Jakarta","1234567890"); // Membuat objek Dosen
$p->perkenalan(); // Memanggil perkenalan Person
$d->perkenalan(); // Memanggil perkenalan Dosen (override)
