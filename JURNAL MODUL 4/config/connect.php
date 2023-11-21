<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

$konek = mysqli_connect('localhost:3308','root','','wad_modul4_ghifary');



// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi

if (!$konek) {
    die('koneksi gagal: ' . mysqli_connect_error());
}

// 
 
?>