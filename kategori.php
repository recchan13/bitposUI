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

        <!-- isi kategori php -->
        <div class="main-container">
            <div class="header-container">
                KATEGORI
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Kategori</h4>
                    <button type="button" class="btn btn-add" onclick="window.location.href='kategori_tambah.php'"><i class="fa fa-plus"></i></button>
                    <div class="table-round" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Kategori</th>
                                <th>Group</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='kategori_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Beras</td>
                                <td>Sembako</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='kategori_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Tv</td>
                                <td>Elektronik</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='kategori_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Buku</td>
                                <td>Alat Tulis</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='kategori_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Minyak</td>
                                <td>Sembako</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='kategori_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Teh</td>
                                <td>Sembako</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
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
        <!-- isi kategori php -->
    </div>

</body>