<?php
require 'koneksi.php' ;
$data = mysqli_query($conn, "SELECT * FROM gtk");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 100%;
            border: none;
            border-radius: 40px;
            padding: 20px;
            background-color: paleturquoise;
            border: 2px solid black;
            margin-top: 40px;
            
        }

        th,td{
            text-align: left;
            padding: 10px;
            font-size: 21px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 300px;
            border-radius: 5px;
        }
        .edit{
            background: blue;
            border-radius: 3px;
            color: black;
        }
        .hapus{
            background-color: red;
            border-radius: 3px;
            color: black;
        }
    </style>
</head>
<body>
    
</body>
</html>
<div class="main">
    <h3>Data Guru</h3>
    
    <a href="tambah_guru.php" class="tambah">Tambah Guru</a>
    <table border="1" cellspacing="35" cellpadding="1">
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>Job</th>
            <th>Roles</th>  
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($data as $guru) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $guru["nama_lengkap"]; ?></td>
            <td><?= $guru["job"]; ?></td>
            <td><?= $guru["roles"]; ?></td>
            <td><img src="../foto/<?= $guru["foto"]; ?>" width="80px" alt=""></td>
            <td>
                <a href="edit_guru.php?id=<?= $guru["id_gtk"]; ?>" class="edit">Edit</a>
                <a href="apus_guru.php?id=<?= $guru["id_gtk"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>