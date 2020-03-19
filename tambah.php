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
        <h4>Tambah Data</h4>
        <a href="index.php" class="btn btn-primary mb-3">Kembali</a>
        <form action="" method="POST" style="width: 50%">
            <div class="form-group">
                <label>Username</label>
                <input name="txt_username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="txt_password" type="password" class="form-control">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input name="txt_nama" type="text" class="form-control">
            </div>
            <button name="simpan" type="submit" class="btn btn-success">Simpan</button>
        </form>
        <?php
        if (isset($_POST['simpan'])) {
            $txt_username = $_POST['txt_username'];
            $txt_password = $_POST['txt_password'];
            $txt_nama     = $_POST['txt_nama'];

            $koneksi->query("INSERT INTO `tb_admin`(`admin_username`, 
                                        `admin_password`, 
                                        `admin_nama`) 
                                        VALUES (
                                            '$txt_username',
                                            '$txt_password',
                                            '$txt_nama'
                                            )");
            // header('location:index.php');
            echo "<script>
            alert('Data Tersimpan');
            window.location='index.php';
            </script>";
        }
        ?>
    </div>
</body>

</html>