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
                        <h4>Import Barang</h4>
                        <form action="barang.php" id="barang_import">
                            <div class="join-textbutton">
                                <select id="name" name="name">
                                    <option value="" disabled selected>Nama Barang</option>
                                    <option value="barang1">barang1</option>
                                    <option value="barang2">barang2</option>
                                    <option value="barang3">barang3</option>
                                </select>
                                <button type="button" class="btn btn-add" onclick="window.location.reload();"><i class="fa fa-refresh"></i><span> Refresh </span></button>
                            </div>
                            <p class="textbox-notif">* Detail barang akan terisi otomatis setelah barang dipilih</p>
                            
                            <input type="text" id="kode" name="kode" placeholder="Kode Barang">
                            <p class="textbox-notif">* Kode barang harus unik, cth: 1412385124851</p>
                            

                            <input type="text" id="kategori" name="kategori" placeholder="Kategori" disabled="disabled">
                            <input type="text" id="subkategori" name="subkategori" placeholder="Sub-Kategori" disabled="disabled">
                            <input type="text" id="satuan" name="satuan" placeholder="Satuan" disabled="disabled">
                            <input type="text" id="stock_min" name="stock_min" placeholder="Stock Minimal" disabled="disabled">
                            <input type="text" id="stock" name="stock" placeholder="Stock Gudang POS" disabled="disabled">
                            <input type="text" id="harga" name="harga" placeholder="Harga Pokok" disabled="disabled">
                            <input type="text" id="harga_jual" name="harga_jual" placeholder="Harga Jual">

                            <button type="submit" class="btn btn-submit" form="barang_import" value="Submit">Submit</button>
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
