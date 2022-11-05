<?php 
require 'functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM resepsionis WHERE id_resepsionis = '$id'")[0];



if(isset($_POST["submit"])){
    if(editResepsionis($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Resepsionis berhasil diubah');
            window.location = 'index.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Resepsionis gagal diubah');
            window.location = 'index.php';
        </script>
    ";
    }
    }   
?>

    <div class="main">
        <div class="box">
            
        <h3>Edit Data Resepsionis</h3>

        <form action="" method="POST">
            <input type="hidden" name="id_resepsionis" value="<?= $data["id_resepsionis"]; ?>">

            <label for="Username">Username</label> <br />
            <input type="text" name="Username" id="Username" 
            class="form-control" value="<?= $data["Username"]; ?>"> <br /><br />

            <label for="Nama_lengkap">Nama Lengkap</label> <br /> 
            <input type="text" name="Nama_lengkap" id="Nama_lengkap"
            class="form-control" value="<?= $data["Nama_lengkap"]; ?>"> <br /><br />

            <label for="Kelas">Kelas</label> <br /> 
            <input type="text" name="Kelas" id="Kelas" class="form-control" value="<?= $data["Kelas"]; ?>"> <br /><br />

            
            <label for="Roles">Roles</label> <br /> 
            <select name="Roles" class="form-control" value="<?= $data["Roles"]; ?>"> <br /><br />

                <option value="Admin">Admin</option>
                <option value="Resepsionis">Resepsionis</option>
            </select>
            <button type="submit" name="submit">Edit</button>

        </form>
        </div>
    </div>