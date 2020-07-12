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

        <!-- isi PENJUALAN php -->
        <div class="main-container">
            <div class="header-container">
                LAPORAN
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Laporan Penjualan</h4>
                    <button type="button" class="btn btn-blue"><i class="fa fa-filter"></i></button>
                    <button type="button" class="btn btn-blue"><i class="fa fa-print"></i></button>
                    <div class="table-round" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Kode</th>
                                <th>Tanggal</th>
                                <th>Diskon</th>
                                <th>Metode Pembayaran</th>
                                <th>Total Keseluruhan</th>
                                <th>Admin</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#penjualan_detail'"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>10100608113956</td>
                                <td>June 8, 2020</td>
                                <td>0%</td>
                                <td>tunai</td>
                                <td>Rp.55,000</td>
                                <td>superadmin</td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#penjualan_detail'"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>10100608113956</td>
                                <td>June 8, 2020</td>
                                <td>0%</td>
                                <td>tunai</td>
                                <td>Rp.55,000</td>
                                <td>superadmin</td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#penjualan_detail'"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>10100608113956</td>
                                <td>June 8, 2020</td>
                                <td>0%</td>
                                <td>tunai</td>
                                <td>Rp.55,000</td>
                                <td>admin</td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#penjualan_detail'"><i class="fa fa-eye"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>10100608113956</td>
                                <td>June 8, 2020</td>
                                <td>0%</td>
                                <td>tunai</td>
                                <td>Rp.55,000</td>
                                <td>superadmin</td>
                            </tr>
                        </table>
                    </div>
                    <div class="pagination">
                        <a href="#">Sebelumnya</a>
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a class="active" href="#">3</a>
                        <a class="disable" href="#">Selanjutnya</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- POPUP -->
        <div id="penjualan_detail" class="overlay">
            <div class="popup">
                <h4>Detail Transaksi</h4>
                <a class="close" href="#">
                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-times"></i></button>
                </a>
                <div class="content">
                    <div div class="table-round" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Barang</th>
                                <th>Qty</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>Beras Putri Sejagat</td>
                                <td>2</td>
                                <td>Rp.55,000</td>
                                <td>0%</td>
                                <td>Rp.110,000</td>
                            </tr>
                            <tr>
                                <td>Teh Kotak Soseo</td>
                                <td>2</td>
                                <td>Rp.7,000</td>
                                <td>0%</td>
                                <td>Rp.14,000</td>
                            </tr>
                        <table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi PENJUALAN php -->
    </div>
</body>