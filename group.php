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

        <!-- isi group php -->
        <div class="main-container">
            <div class="header-container">
                GROUP
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Group</h4>
                    <button type="button" class="btn btn-add" onclick="window.location.href='group_tambah.php'"><i class="fa fa-plus"></i></button>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Group</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='group_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Sembako</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='group_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Elektronik</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='group_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Alat Tulis</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='group_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Medicine</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='group_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#'"><i class="fa fa-shopping-bag"></i></button>
                                </td>
                                <td>Buku</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi group php -->
    </div>
</body>