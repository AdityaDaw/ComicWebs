<?php include 'particle/conn.php' ?>
<?php include 'particle/header.php' ?>

<!doctype html>
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
    <title>Manga Query - A free platform to read comic </title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FG5EBSZQCF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FG5EBSZQCF');
</script>
</head>
    
<body>
<link rel="stylesheet" href="style/front.css">


    <!-- For the cards to show name  -->
    <div class="container-fluid pt-4 bg-gradient" style="background-color: #000;">
        <div class="row">
            <?php
            $sql = "SELECT * FROM `c_name`";
            $res = mysqli_query($conn, $sql);
            $num = mysqli_num_rows($res);
            for ($i = 1; $i <= $num; $i++) {
                # code...
                $row = mysqli_fetch_assoc($res);
                $Sl = $row["Sl_No"];
                $name = $row["Comic Name"];

                echo '<div style="width: 18rem;" class="card p-2 m-auto column bg-transparent bg-gradient text-light " style="width: 18rem;">
        <img src="thumb img/' . $Sl . '.png" class="card-img-top" alt="..." style="height: 300px;">
        <div class="card-body">
            <h5 class="card-title"> ' . $name . '</h5>
           
            <a href="preimg?name=' .str_replace(" ","_",$name) . '&sl=' . $Sl . '" style="background-color:#892cdc" class="btn pt-2 pb-0 text-light"><h6>Click Here to Read<span class="badge bg-danger  mx-1 pt-2-">New</span></h6></a>
        </div>
    </div>;';
            }
            ?>
        </div>
    </div>
    <?php require "particle/footer.php"; ?>

</body>

</html>
<div style="background-image: url();"></div>

