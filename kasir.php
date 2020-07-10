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

        <!-- isi kasir php -->
        <div class="main-container">
            <div class="header-container">
                KASIR
            </div>
            <div class="row">
                <div class="flex-card grow1">
                    <h4>Aktivasi Barcode
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </h4>
                    <div class="grey-card">
                        <i class="fa fa-qrcode"></i>
                    </div>
                    <select id="group" name="group">
                        <option value="" disabled selected>Barang</option>
                        <option value="barang1">barang1</option>
                        <option value="barang2">barang2</option>
                        <option value="barang3">barang3</option>
                    </select>
                    
                    <div style="overflow-x:auto;">
                        <table>
                            <tr>
                                <th></th>
                                <th>Barang</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Diskon</th>
                                <th>Subtotal</th>
                            </tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-times"></i></button>
                                </td>
                                <td>Beras Putri Sejagat</td>
                                <td>
                                    <input type="text" id="bayar" name="bayar" placeholder="0">
                                </td>
                                <td>Rp.55,000</td>
                                <td>
                                    <input type="text" id="diskon" name="diskon" placeholder="0">
                                </td>
                                <td>
                                    <input type="text" id="subtotal" name="subtotal" placeholder="0" disabled="disabled">
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>
                                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-times"></i></button>
                                </td>
                                <td>Minyak Bimoli</td>
                                <td>
                                    <input type="text" id="bayar" name="bayar" placeholder="0">
                                </td>
                                <td>Rp.22,000</td>
                                <td>
                                    <input type="text" id="diskon" name="diskon" placeholder="0">
                                </td>
                                <td>
                                    <input type="text" id="subtotal" name="subtotal" placeholder="0" disabled="disabled">
                                </td>
                            </tr>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="flex-card grow2">
                    <h4>Ringkasan</h4>
                    <form action="kategori.php" id="kategori_tambah">
                        <div class="form-card">
                            <p>Pelanggan</p>
                            <input type="text" id="email" name="email" placeholder="Email">
                            <input type="text" id="phone" name="phone" placeholder="Nomor Telpon">
                        </div>
                        <div class="form-card">
                            <p>Diskon</p>
                            <input type="text" id="diskon" name="diskon" placeholder="0">
                        </div>
                        <div class="order-total">
                            <h4>Total Keseluruhan</h4>
                            <p>Rp. 0</p>
                        </div>
                        <div class="form-card">
                            <p>Pembayaran</p>
                            <input type="text" id="bayar" name="bayar" placeholder="Bayar">
                            <input type="text" id="kembalian" name="kembalian" placeholder="Kembalian">
                            <select id="metode" name="metode">
                                <option value="" disabled selected>Metode Pembayaran</option>
                                <option value="metode1">metode1</option>
                                <option value="metode2">metode2</option>
                                <option value="metode3">metode3</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-submit" form="order_tambah" value="Submit">Order</button>
                        <button type="button" class="btn btn-cancel" onclick="window.location.href='order.php'">Cancel</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- isi kasir php -->
    </div>

</body>