
<?php // Tag pembuka PHP
// Pertemuan 1: Hello OOP PHP (satu file kelas + eksekusi)
class HelloWorld { // Mendefinisikan kelas HelloWorld
    public function greet(): void { // Method publik greet tanpa nilai balik
        echo "Hello, OOP PHP! Selamat datang di pertemuan 1." . PHP_EOL; // Cetak teks sambutan
    } // Menutup method greet
} // Menutup kelas HelloWorld

$h = new HelloWorld(); // Membuat objek dari HelloWorld
$h->greet(); // Memanggil method greet
