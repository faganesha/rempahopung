<?php
include 'config.php';

$daftarRempah = $conn->query("SELECT * FROM tb_daftarrempah");
?>

<!DOCTYPE html>
<html>
<head>
    <title>AdminPage</title>
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
    <style>
        img{
            width: 100px;
        }
    </style>
</head>
<body>


<div style="text-align: center;">
    <div class="m-text14 p-t-50" style="text-align: center; font-size: 30px;">Admin Page</div><br><br>
    <form action="insert.php" method="post">
        <!-- tabke yang berisi dadftar produk -->
        <table border="2" width="100%">
            <tr>
                <th colspan="14" style="font-size: 30px; text-align: center;">Tabel Produk</th>
            </tr>

            <tr>

                <th>Gambar</th>
                <th>Rempah</th>
                <th>Kota</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="2">Action</th>
            </tr>

            <?php
            while ($produk = mysqli_fetch_array($daftarRempah)) {
                echo "<tr>";
                echo "<td> <img src='" . $produk['gambar'] . "'></td>";
                echo "<td>" . $produk['namaRempah'] . "</td>";
                echo "<td>" . $produk['asalKota'] . "</td>";
                echo "<td>" . $produk['harga'] . "</td>";
                echo "<td>" . $produk['stok'] . "</td>"; ?>
                <td><a href="edit-product.php?id=<?php echo $produk['idcat'] ?>" ?>Edit</a></td>
                <td><a href="delete-product.php?id=<?php echo $produk['idcat'] ?>" ?>Delete</a></td></tr>
            <?php } ?>

            <tr>
                <td colspan="11"><a href='insert.html'?>New Product</a></td>
            </tr>

        </table>
</body>
</html>