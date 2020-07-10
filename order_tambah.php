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

        <!-- isi form barang php -->
        <div class="main-container">
            <div class="header-container">
                BARANG
            </div>
            <div class="row">
                <div class="big-card">
                
                    <div class="left-wrapper">
                        <h4>Tambah Order</h4>
                        <div class="row">
                            <div class="order-card">
                                <h5>Beras Putri Sejagat</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Minyak Bimoli</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Teh Kotak Sosro</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Teh Botol Sosro</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Telur Ayam</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Telur Bebek</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Dancow 200 Gr</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Indomilk Kental Manis</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                            <div class="order-card">
                                <h5>Samsung Full HD TV</h5>
                                <p>Harga: Rp. 55,000</p>
                                <p>Stok: 13</p>

                                <div class="input-order">
                                    <input type="text" id="jumlah" name="jumlah" placeholder="Jumlah">
                                    <input type="text" id="diskon" name="diskon" placeholder="Diskon">
                                </div>
                            </div>
                        </div>

                        <h4>Total Keseluruhan</h4>
                        <div class="order-total">
                            <p>Rp. 0</p>
                        </div>

                        <button type="submit" class="btn btn-submit" onclick="window.location.href='#user_detail'">Order</button>
                        <button type="button" class="btn btn-cancel" onclick="window.location.href='order.php'">Cancel</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- POPUP -->
        <div id="user_detail" class="overlay">
            <div class="popup">
                <h4>Order</h4>
                <a class="close" href="#">
                    <button type="button" class="btn btn-smallred" onclick="window.location.href='#'"><i class="fa fa-times"></i></button>
                </a>
                <div class="content">
                    <form action="order.php" id="order_tambah">

                    </form>
                    <input type="text" id="name" name="name" placeholder="Nama">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="text" id="phone" name="phone" placeholder="Nomor Telpon">
                    
                    <button type="submit" class="btn btn-submit" form="order_tambah" value="Submit">Order</button>
                    <button type="button" class="btn btn-cancel" onclick="window.location.href='order.php'">Cancel</button>    
                </div>
            </div>
        </div>
        <!-- isi form barang php -->
    </div>
</body>
</html>
