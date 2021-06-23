<?php
$chapno = $_GET["chapno"];
$name = $_GET["name"];
$name = str_replace("_", " ", $name);

include '../particle/conn.php';
include '../particle/dir_count.php';

$chapter_no_dir_name = '../img/' . $name . '/' . $chapno;
$Pagenum = dir_count($chapter_no_dir_name);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Action, adventure, isekai, fantasy, mystery, romance and more—thousands of manga volumes for every reader and build a impressive comunity of reader">
    <meta name="keywords" content="ACTION, ADVENTURE, ISEKAI, COMIC, FANTASY, MANGA">
    <meta name="author" content="Aditya Narayan Daw">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title><?php echo 'Manga - ' . $name . ' Chapter No - ' . $chapno . '' ?></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito Sans', sans-serif;
        }

        #imgcont {
            background-color: black;
            background-image: linear-gradient(340deg, #010100 0%, #121212 90%);
        }

        img {
            width: inherit;
        }

        a {
            text-decoration: none;
            text-align: center;
            font-size: medium;
        }
    </style>


</head>

<body>
    <div class="class-fluid bg-dark">
        <?php include '../particle/header.php'; ?>
        <div class="container-fluid bg-dark">
            <div class="container-fluid p-3 bg-dark">
                <?php echo '<h2 class="heading text-light">' . $name . ' -- Chapter No -> ' . $chapno . '</h2>' ?>
                <select class="form-select text-light" onchange="location=this.value" style="background-color:#616161;">';
                    <?php

                    $dir_name = '../img/' . $name;
                    $nrow = dir_count($dir_name);
                    echo '<option selected>Chapter No' . $chapno . '</option>';
                    for ($i = 1; $i <= $nrow; $i++) {
                        # code...
                        echo ' <option class="text-light" style="background-color:#010101;" value="../manga?chapno=' . $i . '&name=' . $name . '">Chapter No ' . $i . '</option>';
                    }
                    ?>
                </select>
                <div class="pagination mt-3 d-grid gap-2">
                    <?php
                    if ($chapno - 1 > 0) {
                        $new = $chapno - 1;
                        echo ' <a class="rounded-pill button btn-light p-2 text-primary border border-primary" href="../manga?chapno=' . $new . '&name=' . str_replace(" ", "_", $name) . '">Previous</a>';
                    }
                    if ($chapno + 1 <= $nrow) {
                        # code...
                        $new = $chapno + 1;
                        echo '<a class="rounded-pill button btn-light border text-primary border-primary p-2" href="../manga?chapno=' . $new . '&name=' . str_replace(" ", "_", $name) . '">Next</a>';
                    }
                    ?>
                </div>
            </div>
            <div class="" id="imgcont">

                <?php
                for ($i = 1; $i <= $Pagenum; $i++) {
                    # code...
                    echo '<img class="mx-auto img-fluid" style ="display:block" src="../img/' . $name . '/' . $chapno . '/(' . $i . ').jpeg" alt="...">';
                }
                ?>

            </div>
            <div class="container-fluid bg-dark p-3">
                <?php echo '<h2 class="heading pt-3 text-light">' . $name . ' -- Chapter No -> ' . $chapno . '</h2>' ?>
                <select class="form-select text-light" onchange="location=this.value" style="background-color:#616161;">';
                    <?php


                    echo '<option selected>Chapter No' . $chapno . '</option>';
                    for ($i = 1; $i <= $nrow; $i++) {
                        # code...
                        echo ' <option class="text-light" style="background-color:#010101;" value="../manga?chapno=' . $i . '&name=' . $name . '">Chapter No ' . $i . '</option>';
                    }
                    ?>
                </select>
                <div class="pagination mt-3 d-grid gap-2">
                    <?php
                    if ($chapno - 1 > 0) {
                        $new = $chapno - 1;
                        echo ' <a class="rounded-pill button btn-light p-2 text-primary border border-primary" href="../manga?chapno=' . $new . '&name=' . str_replace(" ", "_", $name) . '">Previous</a>';
                    }
                    if ($chapno + 1 <= $nrow) {
                        # code...
                        $new = $chapno + 1;
                        echo '<a class="rounded-pill button btn-light border text-primary border-primary p-2" href="../manga?chapno=' . $new . '&name=' . str_replace(" ", "_", $name) . '">Next</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require "../particle/footer.php" ?>

</html>