<?php
require 'koneksi.php' ;
$data = mysqli_query($conn, "SELECT * FROM resepsionis");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

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
    <h3>Data Resepsionis</h3>
    
    <a href="tambah_resepsionis.php" class="tambah">Tambah Resepsionis</a>
    <table border="1" cellspacing="35" cellpadding="1">
        <tr>
            <th>No.</th>
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Roles</th>  
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($data as $orang) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $orang["Username"]; ?></td>
            <td><?= $orang["Nama_lengkap"]; ?></td>
            <td><?= $orang["Kelas"]; ?></td>
            <td><?= $orang["Roles"]; ?></td>
            <td>
                <a href="edit_resepsionis.php?id=<?= $orang["id_resepsionis"]; ?>" class="edit">Edit</a>
                <a href="hapus_resepsionis.php?id=<?= $orang["id_resepsionis"]; ?>" class="hapus" onClick="return confirm('Anda yakin ingin menghapus?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>