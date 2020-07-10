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

        <!-- isi pengguna php -->
        <div class="main-container">
            <div class="header-container">
                PENGGUNA
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Pengguna</h4>
                    <button type="button" class="btn btn-add" onclick="window.location.href='pengguna_tambah.php'">
                        <i class="fa fa-plus"></i>
                    </button>
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='pengguna_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='pengguna_delete.php'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>manager</td>
                                <td>Manager</td>
                                <td>manager@gmail.com</td>
                                <td>Manager</td>
                                <td>
                                <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='pengguna_edit.php'"><i class="fa fa-pencil"></i></button>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='pengguna_delete.php'"><i class="fa fa-trash"></i></button>
                                </td>
                                <td>admin</td>
                                <td>Admin</td>
                                <td>admin@gmail.com</td>
                                <td>Admin</td>
                                <td>
                                    <i class="check-icon fa fa-check"></i>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi pengguna php -->
    </div>

</body>