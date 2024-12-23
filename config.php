<?php
// Veritabanı bağlantı bilgileri
$servername = "localhost";     // Sunucu adresi (örn: localhost)
$username   = "root";          // Veritabanı kullanıcı adı
$password   = "";              // Veritabanı şifresi
$dbname     = "argus_db";      // Veritabanı adı

// MySQLi bağlantısı
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if (!$conn) {
    die("Veritabanına bağlanırken hata oluştu: " . mysqli_connect_error());
}

// Karakter setini UTF8 olarak ayarlama
mysqli_set_charset($conn, "utf8");

// Buraya ihtiyaç varsa diğer genel ayarları da ekleyebilirsiniz
?>
