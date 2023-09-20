<?php
// Pastikan ini adalah tindakan POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    // Di sini, Anda dapat melakukan tindakan yang sesuai, seperti menyimpan data ke dalam database atau mengirim email konfirmasi.

    // Misalnya, kita akan menampilkan pesan konfirmasi sederhana:
    echo "<h2>Terima kasih, $nama!</h2>";
    echo "<p>Pendaftaran Anda telah berhasil.</p>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Telepon: $telepon</p>";
} else {
    // Jika ini bukan tindakan POST, maka arahkan pengguna ke halaman formulir.
    header("Location: formulir.html");
    exit;
}
?>
