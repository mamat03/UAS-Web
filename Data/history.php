<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

</head>

<body>

    <?php

    include_once('Connection.php');

    $sql = 'SELECT * FROM history';
    $history = mysqli_query($conn, $sql);

    ?>

    <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="col">

            <h3>History</h3>

            <table class="table table-striped table-hover dtabel">
                <thead>
                    <tr>
                        <th>ID Sewa</th>
                        <th>Nama Penyewa</th>
                        <th>Drone ID</th>
                        <th>Alamat</th>
                        <th>No. HP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = mysqli_fetch_object($history)) { ?>

                        <tr>
                            <td><?= $data->id_sewa ?></td>
                            <td><?= $data->nama_penyewa ?></td>
                            <td><?= $data->id_drone ?></td>
                            <td><?= $data->alamat ?></td>
                            <td><?= $data->no_hp ?></td>

                        </tr>

                    <?php } ?>

                </tbody>
            </table>
            <div class="col-2">
                <a href="index.php">
                    <button class="btn btn-info btn-block">Kembali</button>
                </a>
            </div>



        </div>
    </div>




</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

</html>