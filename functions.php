<?php
require '../koneksi.php';

function query($query){
    
    global $conn;
    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambahGuru($data){
    global $conn;

    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);    
    $job = htmlspecialchars($data["job"]);
    $roles = htmlspecialchars($data["roles"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    $query = "INSERT INTO gtk VALUES(NULL, '$nama_lengkap', '$job', '$roles', '$foto')";
    move_uploaded_file($files, "../foto/".$foto);
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}


function hapusGuru($data){
    global $conn;

    mysqli_query($conn, "DELETE FROM gtk WHERE id_gtk = '$data'");
    return mysqli_affected_rows($conn);
}


function editGuru($data){
    global $conn;

    $data= htmlspecialchars($data["id_gtk"]);    
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $job = htmlspecialchars($data["job"]);
    $roles = htmlspecialchars($data["roles"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_lengkap = '$nama_lengkap',
        job = '$job','
        roles = '$roles'";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE produk SET
        nama_lengkap = '$nama_lengkap',
        job = '$job',
        roles = '$roles',
        foto = '$foto'";
        move_uploaded_file($files, "../foto/".$foto);
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}
?>
