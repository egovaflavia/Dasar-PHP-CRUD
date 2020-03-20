<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dasar CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Dasar CRUD</h2>
        <h4>Tampil Satu Data</h4>
        <a href="index.php" class="btn btn-primary">Kembali</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $dSelect = $_GET['dSelect'];

                include 'conn.php';
                $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id = '$dSelect'");
                $pecah = $ambil->fetch_assoc();
                // var_dump($pecah);
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $pecah['admin_id'] ?></td>
                    <td><?php echo $pecah['admin_username'] ?></td>
                    <td><?php echo $pecah['admin_password'] ?></td>
                    <td><?php echo $pecah['admin_nama'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>