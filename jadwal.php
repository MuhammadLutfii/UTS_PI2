<?php
    include 'model.php';
    $model = new Model();
    $index = 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Jadwal Matakuliah</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous">
    </head>
<body>
        <?php
            include 'navbar.php';
        ?>
    <div class="container-fluid">
    <font face="Times New Romans">
        <h1 align="center">Jadwal Mata Kuliah</h1>
        </font>
        <a href="insert_jadwal.php"> Tambah Data</a><br>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jadwal Id</th>
                    <th>Kode Dosen</th>
                    <th>Hari</th>
                    <th>Tahun Akademik</th>
                    <th>Semester</th>
                    <th>Kode Matakuliah</th>
                    <th>Sesi</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Kelas</th>
                    <th>Ruang</th>
                    <th>Status</th>
                    <th>Kelas Sesi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_jadwal();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->jadwalid ?></td>
                    <td><?= $data->kodedosen ?></td>
                    <td><?= $data->hari ?></td>
                    <td><?= $data->thnakademik ?></td>
                    <td><?= $data->semester ?></td>
                    <td><?= $data->kodemk ?></td>
                    <td><?= $data->sesi ?></td>
                    <td><?= $data->jammasuk ?></td>
                    <td><?= $data->jamkeluar ?></td>
                    <td><?= $data->kelas ?></td>
                    <td><?= $data->ruang ?></td>
                    <td><?= $data->status ?></td>
                    <td><?= $data->kelassesi ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_jadwal.php?id=<?=$data->id?>">Edit</a>
                        <a name="delete" id="delete" href="proces.php?id=<?=$data->id?>">Delete</a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="15">Belum Ada Jadwal</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>
