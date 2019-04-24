<?php
include 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $asalKota = $_POST['asalKota'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    if(!empty($_FILES['gambar']))
    {
        $path = "file/gambar_produk/";

        $path1a = $path . time() .basename( $_FILES['gambar']['name']);
        $pathimages = '/Berkah Traveler/'.$path1a;

        if(move_uploaded_file($_FILES['gambar']['tmp_name'], $path1a)) {
            echo "udah berhasil upload gambar pung";
        } else{
            echo "aduh gagal masukin gambar pung!";

    }
    $sql = "INSERT INTO tb_daftarrempah (gambar, namaRempah, asalKota, harga, stok) 
                          VALUES ('$pathimages','$nama','$asalKota','$stok','$harga')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Data udah masuk pung . <br> <a href = 'admin.php'> Lihat daftar </a> <br> ";
        echo ".<a href = 'insert.html'> Masukkan Data </a> ";
    }else{
        echo "Gagal punk!";
    }

    var_dump($pathimages);
}}
?>