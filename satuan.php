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

        <!-- isi satuan php -->
        <div class="main-container">
            <div class="header-container">
                SATUAN
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Satuan</h4>
                    <button type="button" class="btn btn-add"  onclick="window.location.href='satuan_tambah.php'"><i class="fa fa-plus"></i></button>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Satuan</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Kilogram</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Liter</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Kotak</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Botol</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Kerat</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Lusin</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='satuan_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Rim</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi satuan php -->
    </div>

</body>