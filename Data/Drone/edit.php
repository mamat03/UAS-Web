<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php
    include_once('Connection.php');

    $id = $_GET['data'];
    $sql = "SELECT * FROM jenis WHERE id_drone=$id";
    $sewa = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($sewa);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # bikin query buat update
        
        $drone_id = $_POST['id_drone'];
        $merk = $_POST['merk'];
        $tipe = $_POST['tipe'];
        
        $sql = "UPDATE jenis SET merk = '$merk', tipe = '$tipe'WHERE id_drone=$drone_id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            # jika eksekusi query berhasil
            header('Location: data_drone.php');
        } else {
            # jika eksekusi query gagal
            echo "ubah data gagal: " . mysqli_error($conn);
        }
    }
    ?>

    <div>
        <div class="container bg-info" style="padding-top: 20px; padding-bottom: 20px;">
            <h3>Update Data Sewa</h3>
            <form role="form" action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID Drone</label>
                    <input type="text" name="id_drone" class="form-control" value="<?= $data->id_drone ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Merk</label>
                    <input type="text" name="merk" value="<?= $data->merk ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tipe</label>
                    <input type="text" name="tipe" value="<?= $data->tipe ?>" class="form-control">
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-info btn-block">Update Data</button>
                    <a href="data_drone.php">
                        <button class="btn btn-info btn-block">Kembali</button>
                    </a>
                </div>
                

            </form>
        </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>