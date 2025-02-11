<?php
include "koneksi.php";

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbitan = $_POST['tahun_terbitan'];
$isbn = $_POST['isbn'];
$jumlah_tersedia = $_POST['jumlah_tersedia'];

$sql = "INSERT INTO buku(id_buku, judul, penulis, penerbit, tahun_terbitan, isbn, jumlah_tersedia)
VALUES ('$id_buku', '$judul', '$penulis', '$penerbit', '$tahun_terbitan', '$isbn', '$jumlah_tersedia')";

$query = mysqli_query($koneksi, $sql);

if ($query){
    header("location:index.php?tambah=berhasil");
} else {
    header("location:index.php?tambah=gagal");
}
?>