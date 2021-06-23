<?php
$name = $_GET['name'];
$name = str_replace("_", " ", $name);
$Sl = $_GET['sl'];
include '../particle/conn.php';
include '../particle/dir_count.php';
$dir_name = '../img/' . $name;
$num = dir_count($dir_name);
$sql = "SELECT * FROM `c_name` WHERE Sl_No='$Sl'";
$res1 = mysqli_query($conn, $sql);
$mos = mysqli_fetch_assoc($res1);
$des = $mos['Desci'];
?>



<!DOCTYPE html>
<html lang="en">

<head>

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
        <title><?php echo 'Manga - ' . $name . '' ?></title>
        <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito Sans', sans-serif;
            }
        </style>

    </head>

<body>
    <div class="class-fluid" style="background-image: linear-gradient(340deg, #000100 0%, #121212 90%);">
        <?php include '../particle/header.php' ?>

        <div class="container-fluid p-3">
            <div class="row align-items-center">
                <div class="col-24 col-md-5 attr-cover">
                    <?php echo '<img  src="../thumb img/' . $Sl . '.png" class="img-thumbnail rounded mx-auto d-block m-2" alt="' . $name . '" >' ?>
                </div>
                <div class="col px-5 text-light fs-4">
                    <?php echo $des ?>
                </div>
            </div>
            <h2 class=" text-light mx-3 mt-3"><?php echo $name ?></h2>
            <div class="list-group m-auto bg-transparent bg-gradient">
                <?php
                for ($i = 1; $i <= $num; $i++) {
                    # code...
                    echo ' <a  style="background-color:#616161;" href="../manga?chapno=' . $i . '&name=' . str_replace(" ", "_", $name) . '" class="list-group-item text-light mt-1 mb-1 list-group-item-action">Chapter No ' . $i . '</a>';
                }
                ?>
            </div>
        </div>
        |<?php require "../particle/footer.php" ?>

    </div>
</body>

</html>