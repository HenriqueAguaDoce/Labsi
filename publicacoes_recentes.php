<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
$current = "";
include ('db.php');

include ('session.php');

include('header.php');
?>
<div class="container-fluid wraper">
    <?php include('sidenav.php') ?>
    <br>
    <h1 class="title"><strong>Publicações</strong></h1>
    <br><br>
    <div class="col-sm-8 textcontent">
        <div class="col-md-10">
            <?php
            $db = new Labsi2_db();
            $db ->connect();

            $idPubs = $db->getAllIdsFromPubs();
            foreach($idPubs as $ids){
                $pubs = $db->getAllPubs($ids);
                echo "<h3>" . $pubs['titulo'] . "</h3>";
                $path = "uploads/". $pubs['foto'];
                echo "<img src=$path width='100px' height='50px' alt='image' class='pull-left img-responsive thumb margin10 img-thumbnail'>";
                echo "<p>" . $pubs['descricao'] . "</p>";
                echo '<a class="btn btn-blog pull-right marginBottom10" href="http://bootsnipp.com/user/snippets/2RoQ">READ MORE</a>';
                echo "<br> <br> <br> <br>";
                echo "<hr>";
            }

            $db -> close_connect();
            ?>
        </div>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>