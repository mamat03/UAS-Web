<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Drone</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>

<body>
    <?php

    include_once('Connection.php');

    $sql = 'SELECT * FROM jenis';
    $drone = mysqli_query($conn, $sql);

    ?>

    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
            <div class="col-sm-4">
                <h3>Tambah Drone</h3>
                <form role="form" action="insert.php" method="POST">
                    <div class="form-group">
                        <label>ID Drone</label>
                        <input type="text" name="id_drone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Merk</label>
                        <input type="text" name="merk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tipe</label>
                        <input type="text" name="tipe" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-info btn-block">Tambah Data</button>

                </form>
<br>

                <a href="/UAS-Web/Data/index.php">
                    <button class="btn btn-info btn-block">Kembali</button>
                </a>
            </div>

            <div class="col-sm-8">
                <h3>Data Drone</h3>
                <table class="table table-striped table-hover dtabel">
                    <thead>
                        <tr>
                            <th>ID Drone</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($data = mysqli_fetch_object($drone)) { ?>

                            <tr>
                                <td><?= $data->id_drone ?></td>
                                <td><?= $data->merk ?></td>
                                <td><?= $data->tipe ?></td>
                                <td>
                                    <a href="edit.php?data=<?= $data->id_drone ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?data=<?= $data->id_drone ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
                

            </div>
        </div>





</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>