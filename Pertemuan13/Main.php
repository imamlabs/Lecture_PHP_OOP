
<?php // Tag pembuka PHP
// Exception Handling
function bagi(int $a, int $b): int { // Fungsi pembagian
    if ($b === 0) { // Cek pembagi nol
        throw new DivisionByZeroError("Tidak bisa membagi dengan nol"); // Lempar error jika nol
    } // Menutup if
    return intdiv($a, $b); // Mengembalikan hasil pembagian bulat
} // Menutup fungsi bagi
$stdin = fopen("php://stdin", "r"); // Membuka input standar
try { // Mulai blok try
    echo "Masukkan angka pertama: "; // Minta angka pertama
    $x = (int)trim(fgets($stdin)); // Baca angka pertama
    echo "Masukkan angka kedua: "; // Minta angka kedua
    $y = (int)trim(fgets($stdin)); // Baca angka kedua
    echo "Hasil: " . bagi($x, $y) . PHP_EOL; // Cetak hasil pembagian
} catch (ValueError $e) { // Tangkap error nilai
    echo "Input harus berupa angka." . PHP_EOL; // Pesan error input
} catch (DivisionByZeroError $e) { // Tangkap pembagian nol
    echo $e->getMessage() . PHP_EOL; // Cetak pesan error
} finally { // Blok finally
    echo "Selesai." . PHP_EOL; // Notifikasi selesai
} // Menutup finally
