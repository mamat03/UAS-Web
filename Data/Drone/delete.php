<?php

$id_drone = $_GET['data'];

include_once('Connection.php');
$sql = "DELETE FROM jenis WHERE id_drone=$id_drone";
$result = mysqli_query($conn, $sql);

if ($result) {
    # jika eksekusi query berhasil
    header('Location: data_drone.php');
} else {
    # jika eksekusi query gagal
    echo "Hapus data gagal: " . mysqli_error($conn);
}

?>

<br>
<a href="data_drone.php">
    <button class="btn btn-primary"></button>
</a>