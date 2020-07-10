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
                    
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Nama Barang</th>
                                <th>Group</th>
                                <th>Kategori</th>
                                <th>Sub-Kategori</th>
                                <th>Satuan</th>
                                <th>Stok Minimal</th>
                                <th>Stok</th>
                                <th>Harga Pokok</th>
                                <th>Harga Jual</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallgreen" onclick="window.location.reload();'"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='barang_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras Putri sejagat</td>
                                <td>Sembako</td>
                                <td>Beras</td>
                                <td>5 kg</td>
                                <td>Kilogram</td>
                                <td>10</td>
                                <td>11</td>
                                <td>Rp.50,000</td>
                                <td>Rp.55,000</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallgreen" onclick="window.location.reload();'"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='barang_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras Putri sejagat</td>
                                <td>Sembako</td>
                                <td>Beras</td>
                                <td>5 kg</td>
                                <td>Kilogram</td>
                                <td>10</td>
                                <td>11</td>
                                <td>Rp.50,000</td>
                                <td>Harga Jual</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallgreen" onclick="window.location.reload();'"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='barang_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras Putri sejagat</td>
                                <td>Sembako</td>
                                <td>Beras</td>
                                <td>Sub-Kategori</td>
                                <td>Kilogram</td>
                                <td>10</td>
                                <td>11</td>
                                <td>Rp.50,000</td>
                                <td>Harga Jual</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallgreen" onclick="window.location.reload();'"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='barang_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras Putri sejagat</td>
                                <td>Sembako</td>
                                <td>Kategori</td>
                                <td>Sub-Kategori</td>
                                <td>Kilogram</td>
                                <td>10</td>
                                <td>11</td>
                                <td>Rp.50,000</td>
                                <td>Harga Jual</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallgreen" onclick="window.location.reload();'"><i class="fa fa-refresh"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='barang_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras Putri sejagat</td>
                                <td>Sembako</td>
                                <td>Kategori</td>
                                <td>Sub-Kategori</td>
                                <td>Kilogram</td>
                                <td>10</td>
                                <td>11</td>
                                <td>Rp.50,000</td>
                                <td>Harga Jual</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi barang php -->
    </div>

</body>