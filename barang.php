<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>BITPOS</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <div class="wrapper">
        <!-- navbar -->
        <?php include "navbar.html"?>

        <!-- isi barang php -->
        <div class="main-container">
            <div class="header-container">
                BARANG
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Barang</h4>
                    <button type="button" class="btn btn-add" onclick="window.location.href='barang_tambah.php'"><i class="fa fa-plus"></i></button>
                    <button type="button" class="btn btn-refresh"><i class="fa fa-refresh" onclick="window.location.reload();"></i></button>
                    <button type="button" class="btn btn-add-green" onclick="window.location.href='barang_import.php'"><i class="fa fa-plus"></i> Gudang POS</button>
                    <button type="button" class="btn btn-blue"><i class="fa fa-filter"></i></button>
                    <P>tabel disini</P>
                </div>
            </div>
        </div>
        <!-- isi barang php -->
    </div>

</body>