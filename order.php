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

        <!-- isi order php -->
        <div class="main-container">
            <div class="header-container">
                ORDER
            </div>
            <div class="row">
                <div class="big-card">
                    <h4>Daftar Order</h4>
                    <button type="button" class="btn btn-add" onclick="window.location.href='order_tambah.php'"><i class="fa fa-plus"></i></button>
                    
                    <div class="table-round" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Action</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Nomor Telepon</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#order_detail'"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>order20200511095426</td>
                                <td>Order1</td>
                                <td>order@gmail.com</td>
                                <td>081212983756</td>
                                <td>
                                    <i class="flag-icon fa fa-flag"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#order_detail'"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>order20200511095426</td>
                                <td>Order1</td>
                                <td>order@gmail.com</td>
                                <td>081212983756</td>
                                <td>
                                    <i class="flag-icon fa fa-flag"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#order_detail'"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>order20200511095426</td>
                                <td>Order1</td>
                                <td>order@gmail.com</td>
                                <td>081212983756</td>
                                <td>
                                    <i class="flag-icon fa fa-flag"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#order_detail'"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>order20200511095426</td>
                                <td>Order1</td>
                                <td>order@gmail.com</td>
                                <td>081212983756</td>
                                <td>
                                    <i class="flag-icon fa fa-flag"></i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallblue" onclick="window.location.href='#order_detail'"><i class="fa fa-eye"></i></button>
                                </td>
                                <td>order20200511095426</td>
                                <td>Order1</td>
                                <td>order@gmail.com</td>
                                <td>081212983756</td>
                                <td>
                                    <i class="flag-icon fa fa-flag"></i>
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
        <!-- POPUP -->
        <div id="order_detail" class="overlay">
            <div class="popup">
                <h4>Detail Order</h4>
                <a class="close" href="#">
                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-times"></i></button>
                </a>
                <div class="content">
                    <div class="table-round" style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>Beras Putri Sejagat</td>
                                <td>1</td>
                                <td>Rp.55,000</td>
                                <td>0%</td>
                                <td>Rp.55,000</td>
                            </tr>
                            <tr>
                                <td>Minyak Bimoli</td>
                                <td>1</td>
                                <td>Rp.30,000</td>
                                <td>0%</td>
                                <td>Rp.30,000</td>
                            </tr>
                        <table>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi order php -->
    </div>

</body>