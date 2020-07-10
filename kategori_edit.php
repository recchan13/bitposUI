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
                KATEGORI
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Edit Kategori</h4>
                        <form action="kategori.php" id="kategori_tambah">
                            <input type="text" id="name" name="name" placeholder="Nama kategori">
                            <select id="group" name="group">
                                <option value="" disabled selected>Group</option>
                                <option value="group1">group1</option>
                                <option value="group2">group2</option>
                                <option value="group3">group3</option>
                            </select>

                            <button type="submit" class="btn btn-submit" form="kategori_tambah" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='kategori.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form kategori php -->
    </div>
</body>
</html>
