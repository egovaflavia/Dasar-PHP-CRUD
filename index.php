<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dasar CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Dasar CRUD</h2>
        <h4>Tampil</h4>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $ambil = $koneksi->query("SELECT * FROM tb_admin");
                while ($pecah = $ambil->fetch_assoc()) {
                    // var_dump($pecah);
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $pecah['admin_id'] ?></td>
                        <td><?php echo $pecah['admin_username'] ?></td>
                        <td><?php echo $pecah['admin_password'] ?></td>
                        <td><?php echo $pecah['admin_nama'] ?></td>
                        <td width="230px">
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="hapus.php?dHapus=<?php echo $pecah['admin_id'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="detail.php?dSelect=<?php echo $pecah['admin_id'] ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
</body>

</html>