<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Dasar CRUD</h2>
        <h4>Edit Data</h4>
        <a class="btn btn-primary mb-2" href="index.php">Kembali</a>
        <?php
        $dEdit = $_GET['dEdit'];
        $ambil = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id = '$dEdit'");
        $pecah = $ambil->fetch_assoc();
        // var_dump($pecah);
        ?>
        <form style="width: 50%" class="mb-5" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input value="<?php echo $pecah['admin_username'] ?>" class="form-control" type="text" name="txt_username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input value="<?php echo $pecah['admin_password'] ?>" class="form-control" type="text" name="txt_password">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input value="<?php echo $pecah['admin_nama'] ?>" class="form-control" type="text" name="txt_nama">
            </div>
            <button name="edit" class="btn btn-primary">Edit</button>
        </form>
        <?php
        if (isset($_POST['edit'])) {
            $txt_username = $_POST['txt_username'];
            $txt_password = $_POST['txt_password'];
            $txt_nama     = $_POST['txt_nama'];

            $koneksi->query("UPDATE tb_admin SET    admin_username = '$txt_username', 
                                                    admin_password = '$txt_password',
                                                    admin_nama = '$txt_nama'
                                                    WHERE
                                                    admin_id = '$dEdit'
                                                    ");
            echo "<script>
            alert('Data berhasil di edit');
            window.location='index.php';
            </script>";
        }
        ?>
    </div>
</body>

</html>