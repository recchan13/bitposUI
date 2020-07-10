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

        <!-- isi form kategori php -->
        <div class="main-container">
            <div class="header-container">
                SUB-KATEGORI
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Edit Sub-Kategori</h4>
                        <form action="subkategori.php" id="subkategori_edit">
                            <input type="text" id="name" name="name" placeholder="Nama subkategori">
                            <select id="kategori" name="kategori">
                                <option value="" disabled selected>Pilih kategori</option>
                                <option value="kategori1">kategori1</option>
                                <option value="kategori2">kategori2</option>
                                <option value="kategori3">kategori3</option>
                            </select>

                            <button type="submit" class="btn btn-submit" form="subkategori_edit" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='subkategori.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form subkategori php -->
    </div>
</body>
</html>
