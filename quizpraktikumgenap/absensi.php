<?php include("config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Mahasiswa</title>
</head>
<body>
    <header>
        <h3>Absensi Mahasiswa</h3>
    </header>

    <nav>
        <a href="absensi.php">[+] Tambah </a>
    </nav>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT*FROM absensi_perkuliahan";
            $query = mysqli_query($db,$sql);

            while($mahasiswa = mysqli_fetch_array($query)){
                echo"<tr>";
                echo"<td>".$mahasiswa['id']."</td>";
                echo"<td>".$mahasiswa['nama']."</td>";
                echo"<td>".$mahasiswa['npm']."</td>";
                echo"<td>".$mahasiswa['jurusan']."</td>";
                echo"<td>".$mahasiswa['tanggal']."</td>";
                

                echo"<td>";
                echo"<a href='form_edit.php?id=".$mahasiswa['id']."'>Edit</a>";
                echo"<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
                echo"</td>";
                echo"</tr>";
            }
            ?>
        </tbody>
        </table>
<p> Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>