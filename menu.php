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

        <!-- isi Menu php -->
        <div class="main-container">
            <div class="header-container">
                PENGATURAN
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Menu Setup</h4>
                        <form action="email.php" id="email">
                            <select id="inventory" name="inventory">
                                <option value="" disabled selected>Inventory</option>
                                <option value="inventory1">inventory1</option>
                                <option value="inventory2">inventory2</option>
                                <option value="inventory3">inventory3</option>
                            </select>
                            
                            <button type="submit" class="btn btn-submit" form="menu" value="Submit">Simpan</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='index.php'">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi Menu php -->
    </div>
</body>