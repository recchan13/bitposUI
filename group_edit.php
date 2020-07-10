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

        <!-- isi form group php -->
        <div class="main-container">
            <div class="header-container">
                GROUP
            </div>
            <div class="row">
                <div class="big-card">
                    <div class="centered-wrapper">
                        <h4>Edit Group</h4>
                        <form action="group.php" id="group_edit">
                            <input type="text" id="name" name="name" placeholder="Nama Group">

                            <button type="submit" class="btn btn-submit" form="group_edit" value="Submit">Submit</button>
                            <button type="button" class="btn btn-cancel" onclick="window.location.href='group.php'">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- isi form group php -->
    </div>
</body>
</html>
