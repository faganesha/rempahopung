<?php
include 'config.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT FROM tb_daftarrempah WHERE id=$id");
$delete = mysqli_fetch_array($result);

mysqli_query($conn, "DELETE FROM tb_daftarrempah WHERE id=$id");

unlink($result['gambar']);

header("location:admin.php");
?>