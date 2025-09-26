
<?php // Tag pembuka PHP
// Enum (PHP 8.1+) atau fallback konstanta untuk versi lebih lama
if (version_compare(PHP_VERSION, '8.1.0', '>=')) { // Cek dukungan enum
    enum Jurusan { // Mendefinisikan enum Jurusan
        case INFORMATIKA; // Nilai enum INFORMATIKA
        case SISTEM_INFORMASI; // Nilai enum SISTEM_INFORMASI
        case TEKNIK_KOMPUTER; // Nilai enum TEKNIK_KOMPUTER
    } // Menutup enum Jurusan
} else { // Fallback jika PHP lama
    class Jurusan { // Kelas dengan konstanta sebagai fallback
        public const INFORMATIKA = 'INFORMATIKA'; // Konstanta string INFORMATIKA
        public const SISTEM_INFORMASI = 'SISTEM_INFORMASI'; // Konstanta string SISTEM_INFORMASI
        public const TEKNIK_KOMPUTER = 'TEKNIK_KOMPUTER'; // Konstanta string TEKNIK_KOMPUTER
    } // Menutup kelas fallback Jurusan
} // Menutup blok pengecekan versi
