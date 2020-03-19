<?php
$txt_username = $_POST['txt_username'];
$txt_password = $_POST['txt_password'];
$txt_nama     = $_POST['txt_nama'];

include 'conn.php';

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
