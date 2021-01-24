<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Penyewaan Drone</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>

<body>


    <?php

    include_once('Connection.php');

    $sql = 'SELECT * FROM data';
    $data_sewa = mysqli_query($conn, $sql);

    ?>

    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <h3>Jasa Penyewaan Drone</h3>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h3>Form Tambah Penyewaan</h3>
                <form role="form" action="insert.php" method="POST">
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id_penyewaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Drone ID</label>
                        <?php
                            include_once('Connection.php');

                            $sql = 'SELECT * FROM jenis ORDER BY id_drone';
                            $drone = mysqli_query($conn, $sql);
                        ?>

                        <select name="id_drone" type="text" class="form-control">
                            <option>-Pilih ID Drone-</option>
                            <?php while ($row = mysqli_fetch_array($drone)) { ?>
                                <option><?php echo $row['id_drone'] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Penyewa</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="text" name="no_Hp" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Tambah Data</button>


                </form>
                    <br>

                <a href="Drone/data_drone.php">
                    <button class="btn btn-info btn-block">Data Drone</button>
                </a>
                <br>
                <a href="history.php">
                    <button class="btn btn-info btn-block">History</button>
                </a>

            </div>
            <div class="col-sm-8">
                <h3>Data Penyewa</h3>
                <table class="table table-striped table-hover dtabel">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Drone ID</th>
                            <th>Nama Penyewa</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_object($data_sewa)) { ?>

                            <tr>
                                <td><?= $data->id_sewa ?></td>
                                <td><?= $data->drone_id ?></td>
                                <td><?= $data->nama_penyewa ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->no_hp ?></td>
                                <td>
                                    <a href="edit.php?data=<?= $data->id_sewa ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?data=<?= $data->id_sewa ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>

                        <?php } ?>



                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>