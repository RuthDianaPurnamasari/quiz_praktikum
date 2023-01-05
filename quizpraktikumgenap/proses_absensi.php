<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau belom?
if(isset($_POST['absensi'])){

    //ambil data dari formulir
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];

    //buat query
    $sql = "INSERT INTO absensi (nama, npm, jurusan, tanggal)
    VALUE ('$nama', '$npm', '$jurusan', '$tanggal')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if( $squery ) {
        //kalau berhasil alihkan ke halam index.php dengan status=sukses 
    } else {
        //kalau gagal alihkan ke halam index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
?>