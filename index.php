<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
</head>

<body>
    <a href="tambah.php">+ Tambah Siswa</a>

    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM data");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>