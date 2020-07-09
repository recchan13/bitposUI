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

        <!-- isi form satuan php -->
        <div class="main-container">
            <div class="header-container">
                satuan
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Form Satuan</h4>
                        <form action="satuan.php" id="satuan_tambah">
                            <input type="text" id="name" name="name" placeholder="Nama satuan">

                            <button type="submit" class="btn btn-submit" form="satuan_tambah" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='satuan.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form satuan php -->
    </div>
</body>
</html>
