<?php 
require 'functions.php';

$id = $_GET["id"];
$data = query("SELECT * FROM gtk WHERE id_gtk = '$id'")[0];



if(isset($_POST["submit"])){
    if(editGuru($_POST) > 0){
    echo "
        <script type='text/javascript'>
            alert('Data Guru berhasil diubah');
            window.location = 'guru.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Guru gagal diubah');
            window.location = 'guru.php';
        </script>
    ";
    }
    }   
?>

    <div class="main">
        <div class="box">
            
        <h3>Edit Data Guru</h3>

        <form action="" method="POST">
            <input type="hidden" name="id_gtk" value="<?= $data["id_gtk"]; ?>">

            <label for="nama_lengkap">nama lengkap</label> <br />
            <input type="text" name="nama_lengkap" id="nama_lengkap" 
            class="form-control" value="<?= $data["nama_lengkap"]; ?>"> <br /><br />

            <label for="job">Job</label> <br /> 
            <input type="job" name="job" id="job"
            class="form-control" value="<?= $data["job"]; ?>"> <br /><br />

            <label for="foto">Foto</label>
             <input type="file" name="foto" class="form-control" value="<?= $produk["foto"]; ?>"> <br /><br />  

            <label for="Roles">Roles</label> <br /> 
            <select name="Roles" class="form-control" value="<?= $data["Roles"]; ?>"> <br /><br />  
                <option value="Kepala Sekolah">Kepala Sekolah</option>
                <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                <option value="Guru">Guru</option>
            </select>
            <button type="submit" name="submit">Edit</button>

        </form>
        </div>
    </div>