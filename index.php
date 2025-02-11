<?php
include "koneksi.php";
$sql = "SELECT * FROM buku";
$query = mysqli_query($koneksi, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>FORM TAMBAH</h1>
    <form action="proses_tambah.php" method="POST">
        <label for="">JUDUL</label>
        <input type="text" name="judul"><br>
        <label for="">PENULIS</label>
        <input type="text" name="penulis"><br>
        <label for="">PENERBIT</label>
        <input type="text" name="penerbit"><br>
        <label for="">TAHUN TERBIT</label>
        <input type="number" name="tahun_terbitan"><br>
        <label for="">ISBN</label>
        <input type="number" name="isbn"><br>
        <label for="">JUMLAH TERSEDIA</label>
        <input type="number" name="jumlah_tersedia"><br>
        <input type="submit" values="simpan">
    </form>

    
    <h1>DATA BUKU</h1>

    <table border="1">
        <tr>
            <th>ID BUKU</th>
            <th>JUDUL</th>
            <th>PENULIS</th>
            <th>PENERBIT</th>
            <th>TAHUN TERBIT</th>
            <th>ISBN</th>
            <th>JUMLAH TERSEDIA</th>
            <th>AKSI</th>
        </tr>
        <?php
            while ($buku = mysqli_fetch_assoc($query)){
                echo "<tr>";
                    echo "<td>".$buku['id_buku']."</td>";
                    echo "<td>".$buku['judul']."</td>";
                    echo "<td>".$buku['penulis']."</td>";
                    echo "<td>".$buku['penerbit']."</td>";
                    echo "<td>".$buku['tahun_terbitan']."</td>";
                    echo "<td>".$buku['isbn']."</td>";
                    echo "<td>".$buku['jumlah_tersedia']."</td>";
                    echo "<td>";
                        echo "<a href='edit.php?id_buku=".$buku['id_buku']."'>Edit</a>";
                        echo "|";
                        echo "<a href='hapus.php?id_buku=".$buku['id_buku']."'>Hapus</a>";
                    echo "</td>";
                echo "</tr>";
            }
            
        ?>
    </table>

</body>
</html>