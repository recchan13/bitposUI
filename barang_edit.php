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
                        <h4>Edit Barang</h4>
                        <form action="barang.php" id="barang_edit">
                            <input type="text" id="harga" name="harga" placeholder="Harga Pokok Rp.50,000" disabled="disabled">
                            <p class="textbox-notif">* Harga Pokok dari Gudang POS tidak dapat diubah</p>

                            <input type="text" id="harga_jual" name="harga_jual" placeholder="Harga Jual">

                            <button type="submit" class="btn btn-submit" form="barang_edit" value="Submit">Submit</button>
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
