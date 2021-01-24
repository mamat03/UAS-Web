<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # bikin query buat insert data ke db
    include_once('Connection.php');

    $id = $_POST['id_penyewaan'];
    $id_drone = $_POST['id_drone'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['no_Hp'];
    $sql = "INSERT INTO data VALUES ('$id','$id_drone','$nama','$alamat','$noHp')";
    
    $result = mysqli_query($conn, $sql);
    

    if ($result) {
        # jika eksekusi query berhasil
        header('Location: index.php');
        
    } else {
        # jika eksekusi query gagal
        echo "Insert data gagal: " . mysqli_error($conn);
    }

}

?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # bikin query buat insert data ke db
    include_once('Connection.php');

    $id = $_POST['id_penyewaan'];
    $id_drone = $_POST['id_drone'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $noHp = $_POST['no_Hp'];
    $sql = "INSERT INTO history VALUES ('$id','$nama','$id_drone','$alamat','$noHp')";
    
    $result = mysqli_query($conn, $sql);
    
}

?>