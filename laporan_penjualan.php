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
                    <div style="overflow-x:auto;">
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
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='laporan_detail.php'"><i class="fa fa-eye"></i></button>
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
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='laporan_detail.php'"><i class="fa fa-eye"></i></button>
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
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='laporan_detail.php'"><i class="fa fa-eye"></i></button>
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
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='laporan_detail.php'"><i class="fa fa-eye"></i></button>
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
                </div>
            </div>
        </div>
        <!-- isi PENJUALAN php -->
    </div>
</body>