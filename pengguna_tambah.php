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

        <!-- isi form pengguna php -->
        <div class="main-container">
            <div class="header-container">
                PENGGUNA
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Form Pengguna</h4>
                        <form action="pengguna.php" id="pengguna_tambah">
                            <input type="text" id="uname" name="uname" placeholder="Username">
                            <input type="text" id="nama" name="nama" placeholder="Nama">
                            <input type="text" id="email" name="email" placeholder="E-mail">
                            <input type="text" id="confirm_email" name="confirm_email" placeholder="Konfirmasi Email">
                            <input type="text" id="password" name="password" placeholder="Password">
                            <input type="text" id="confirm_password" name="confirm_password" placeholder="Konfirmasi Password">
                            <select id="role" name="role">
                                <option value="" disabled selected>Role User</option>
                                <option value="role1">role1</option>
                                <option value="role2">role2</option>
                                <option value="role3">role3</option>
                            </select>

                            <button type="submit" class="btn btn-submit" form="pengguna_tambah" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='pengguna.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form pengguna php -->
    </div>
</body>
</html>
