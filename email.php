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

        <!-- isi email php -->
        <div class="main-container">
            <div class="header-container">
                PENGATURAN
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Email Setup</h4>
                        <form action="email.php" id="email">
                            <input type="text" id="email" name="email" placeholder="Email">
                            <input type="password" id="password" name="password" placeholder="Password">
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="Konfirmasi Password">
                            <input type="text" id="subjek" name="subjek" placeholder="Subjek">
                            <textarea name="pesan" id="pesan" cols="30" rows="10" placeholder="Pesan"></textarea>
                            

                            <button type="submit" class="btn btn-submit" form="email" value="Submit">Simpan</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='index.php'">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi email php -->
    </div>
</body>