<?php 
include 'config.php';

$id = $_POST['id'];

$nama = $_POST['nama'];
$asalKota = $_POST['asalKota'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

if(!empty($_FILES['gambar'])) {
    $path = "file/gambar_produk/";

    $path1a = $path . time() . basename($_FILES['gambar']['name']);
    $pathimages = '/rempahopung/' . $path1a;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $path1a)) {
        echo "udah berhasil upload gambar pung";
    } else {
        echo "aduh gagal masukin gambar pung!";

    }
}

	$result = mysqli_query($conn, "UPDATE tb_daftarrempah SET id='$id', namaRempah='$nama', asalKota='$asalKota'
    stok='$stok', harga='$harga' WHERE id='$id'");

var_dump($result);
echo mysqli_error($conn);

	//header("location:admin.php");

	?>