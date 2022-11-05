<?php 

require 'functions.php';


if(isset($_POST["submit"])){
    if(tambahGuru($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data guru berhasil ditambahkan');
            window.location = 'guru.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data guru gagal ditambahkan');
            window.location = 'guru.php';
        </script>
    ";
    }
    }   

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <form action="" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />

            <label for="job">Job</label> <br /> 
            <input type="text" name="job" id="job" class="form-control"><br />

            <label for="Roles">Roles</label> <br /><br />
            <select name="Roles" class="form-control"><br />
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select>
            
            <button type="submit" name="submit">Tambah</button>

        </form>
        </div>
    </div>
    </body>
    </html>
    