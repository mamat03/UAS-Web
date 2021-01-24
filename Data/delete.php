<?php

$id_sewa = $_GET['data'];

include_once('Connection.php');
$sql = "DELETE FROM data WHERE id_sewa=$id_sewa";
$result = mysqli_query($conn, $sql);

if ($result) {
    # jika eksekusi query berhasil
    header('Location: index.php');
} else {
    # jika eksekusi query gagal
    echo "Hapus data gagal: " . mysqli_error($conn);
}

?>

<br>
<a href="index.php">Kembali</a>