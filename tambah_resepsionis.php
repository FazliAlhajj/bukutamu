<?php 

require 'functions.php';


if(isset($_POST["submit"])){
    if(tambahResepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Resepsionis berhasil ditambahkan');
            window.location = 'index.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Resepsionis gagal ditambahkan');
            window.location = 'index.php';
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
            <label for="Username">Username</label> <br />
            <input type="text" name="Username" id="Username" class="form-control"> <br />

            <label for="Nama_lengkap">Nama Lengkap</label> <br /> 
            <input type="text" name="Nama_lengkap" id="Nama_lengkap" class="form-control"><br />

            <label for="Kelas">Kelas</label> <br />
            <input type="Kelas" name="Kelas" id="Kelas" class="form-control"> <br />

            <label for="Roles">Roles</label> <br /><br />
            <select name="Roles" class="form-control"><br />
                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select>
            
            <button type="submit" name="submit">Tambah</button>

        </form>
        </div>
    </div>
    </body>
    </html>
    