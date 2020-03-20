<?php
$id_hapus = $_GET['dHapus'];
include 'conn.php';

$koneksi->query("DELETE FROM `tb_admin` WHERE admin_id = '$$id_hapus'");

echo "<script>
alert('Data dihapus');
window.location='index.php';
</script>";
