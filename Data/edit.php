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
    $sql = "SELECT * FROM data WHERE id_sewa=$id";
    $sewa = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($sewa);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # bikin query buat update
        $sewa_id = $_POST['id_penyewaan'];
        $drone_id = $_POST['id_drone'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $noHp = $_POST['no_Hp'];
        $sql = "UPDATE data SET drone_id = '$drone_id', nama_penyewa = '$nama', alamat = '$alamat', no_hp = '$noHp' WHERE id_sewa=$sewa_id";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            # jika eksekusi query berhasil
            header('Location: index.php');
        } else {
            # jika eksekusi query gagal
            echo "ubah data gagal: " . mysqli_error($conn);
        }
    }
    ?>

    <div>
        <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
            <h3>Update Data Sewa</h3>
            <form role="form" action="edit.php" method="POST">
                <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="id_penyewaan" class="form-control" value="<?= $data->id_sewa ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Drone ID</label>
                    <input type="text" name="id_drone" value="<?= $data->drone_id ?>" readonly class="form-control">
                </div>
                <div class="form-group">
                    <label>Nama Penyewa</label>
                    <input type="text" name="nama" value="<?= $data->nama_penyewa ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?= $data->alamat ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" name="no_Hp" value="<?= $data->no_hp ?>" class="form-control">
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-info btn-block">Update Data</button>
                    <br>
                    <a href="index.php">
                        <button class="btn btn-info btn-block">Kembali</button>
                    </a>
                </div>
                

            </form>
        </div>


</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>