<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # bikin query buat insert data ke db
    include_once('Connection.php');

    $id_drone = $_POST['id_drone'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $sql = "INSERT INTO jenis VALUES ('$id_drone','$merk','$tipe')";
    
    $result = mysqli_query($conn, $sql);
    

    if ($result) {
        # jika eksekusi query berhasil
        header('Location: data_drone.php');
        
    } else {
        # jika eksekusi query gagal
        echo "Insert data gagal: " . mysqli_error($conn);
    }

}

?>

