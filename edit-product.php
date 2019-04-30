<?php  
include 'config.php';
$id = $_GET['id'];

$daftarRempah = $conn->query("SELECT * FROM tb_daftarrempah WHERE id=$id");
//$resultProduk = mysqli_query($conn, "SELECT * FROM tb_daftarrempah WHERE idcat = $id");
$produk = mysqli_fetch_array($daftarRempah);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<style type="text/css">
	img{
		width: 100px;
	}
</style>

</head>
<body>
	<center>
		<table border="1px">
			<tr>
				<th>Gambar</th>
				<th>Nama Rempah</th>
				<th>Kota</th>
				<th>Harga</th>
				<th>Stok</th>
			</tr>
			<tr>
                <td><img src='<?=$produk['gambar']?>'></td>
                <td><?=$produk['namaRempah']?></td>
                <td><?=$produk['asalKota']?></td>
                <td><?=$produk['harga']?></td>
                <td><?=$produk['stok']?></td>
			</table>

			<form action="update-product.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?=$produk['id']?>">
				<table border="2">
					<tr>
						<td colspan="2">Form Edit Daftar Rempah</td>
					</tr>
                    <tr>
                        <td>Gambar</td>
                        <td><input type="file" name="gambar"/></td>
                    </tr>
                    <tr>
                        <td>Rempah</td>
                        <td><input type="text" name="nama"/></td>
                    </tr>

						<tr>
							<td>Kota</td>
							<td><input type="text" name="asalKota"/></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><input type="text" name="harga"/></td>
						</tr>
						<tr>
							<td>Stok</td>
							<td><input type="text" name="stok"/></td>
						</tr>

						<tr>
							<td colspan="3">
								<div style="text-align: center;">
									 <button type="submit" class="flex-c-m p-t-10" name="submit">Submit</button>
								</div>
							</td>
						</tr>
					</table>
				</form>
			</center>
		</body>
		</html>