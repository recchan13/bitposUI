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
                    <div class="centered-wrapper">
                        <h4>Form Barang</h4>
                        <form action="barang.php" id="barang_tambah">
                            <input type="text" id="kode" name="kode" placeholder="Kode Barang">
                            <p class="textbox-notif">* Kode barang harus unik, cth: 1412385124851</p>

                            <input type="text" id="nama" name="nama" placeholder="Nama Barang">
                            <select id="group" name="group">
                                <option value="" disabled selected>Group</option>
                                <option value="group1">group1</option>
                                <option value="group2">group2</option>
                                <option value="group3">group3</option>
                            </select>
                            <select id="kategori" name="kategori">
                                <option value="" disabled selected>Kategori</option>
                                <option value="kategori1">kategori1</option>
                                <option value="kategori2">kategori2</option>
                                <option value="kategori3">kategori3</option>
                            </select>
                            <select id="subkategori" name="subkategori">
                                <option value="" disabled selected>Sub-Kategori</option>
                                <option value="subkategori1">subkategori1</option>
                                <option value="subkategori2">subkategori2</option>
                                <option value="subkategori3">subkategori3</option>
                            </select>
                            <select id="satuan" name="satuan">
                                <option value="" disabled selected>Satuan</option>
                                <option value="satuan1">satuan1</option>
                                <option value="satuan2">satuan2</option>
                                <option value="satuan3">satuan3</option>
                            </select>
                            <input type="text" id="stock_min" name="stock_min" placeholder="Stock Barang Minimal">
                            <input type="text" id="stock" name="stock" placeholder="Stock Barang">
                            <input type="text" id="harga" name="harga" placeholder="Harga Pokok">
                            <input type="text" id="harga_jual" name="harga_jual" placeholder="Harga Jual">

                            <button type="submit" class="btn btn-submit" form="barang_tambah" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='barang.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form barang php -->
    </div>
</body>
</html>
