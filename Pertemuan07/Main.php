
<?php // Tag pembuka PHP
require_once __DIR__ . '/AkunBank.php'; // Memuat kelas AkunBank
$a = new AkunBank("001", 100000); // Membuat akun dengan saldo awal
$a->setor(25000); // Setor 25000
$a->tarik(5000); // Tarik 5000
$a->info(); // Tampilkan saldo terkini
