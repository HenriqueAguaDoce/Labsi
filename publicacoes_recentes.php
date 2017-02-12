<?php
$current = "";
include ('db.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php

    $db = new Labsi2_db();
    $db ->connect();

    if(!isset($_POST['Procurar'])){
        if(count($db->getAllIdsFromPubs())<4){
            echo '<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />';
        }
        else{
            echo '<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />';
        }
    }
    else{
        if((isset($_POST['areas']))&& ($_POST['areas'] != "Todas as publicações")) {
            $idFromArea = $db-> getIdFromAreas($_POST['areas']);
            $allPubsFromIdArea = $db->getAllPubsFromIdArea($idFromArea);
            if((count($allPubsFromIdArea))<3){
                echo '<link href="style/style.css" rel="stylesheet" type="text/css" media="all" />';
            }
            else{
                echo '<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />';
            }
        }
        else{
            if((count($db->getAllIdsFromPubs()))<4){
                echo '<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />';
            }
            else{
                echo '<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />';
            }
        }
    }


    $db -> close_connect();
    ?>
</head>

<body>
<?php
include ('session.php');

include('header.php');

function nomes($autores){
    $nomesTotal="";
    foreach($autores as $nomes){
        $nomesTotal .="$nomes, ";
    }
    return substr($nomesTotal, 0, -2);
}
?>
<div class="container-fluid wraper">
    <?php include('sidenav.php') ?>
    <br>
    <h1 class="title"><strong>Publicações</strong></h1>
    <form class="form-horizontal" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <?php
        $db = new Labsi2_db();
        $db ->connect();

        $idPubs = $db->getAllIdsFromPubs();
        if(count($idPubs) != 0){
            echo '<p class="pull-right marginBottom10" style="margin-right:13px;"><strong>Deseja procurar por uma area especifica?</strong></p><br><br>';
            echo '<select name="areas" class="pull-right" style="margin-right:25px;">';
            echo '<option selected>Todas as publicações</option>';
            $areas = $db->getAllNamesFromAreas();

            foreach ($areas as $nomes) {
                echo "<option value='$nomes'>" . $nomes . "</option>";
            }
            echo '</select>';
            echo '<br><br>';
            echo '<input class="btn btn-primary pull-right" style="margin-right:25px; padding-left: 105px; padding-right: 95px" type="submit" name="Procurar" value="Procurar" />';
        }
        $db -> close_connect();
        ?>
    </form>
    <div class="col-sm-8 textcontent">
        <div class="col-md-10">
            <?php
            $db = new Labsi2_db();
            $db ->connect();
            if(!isset($_POST['Procurar'])){
                $idPubs = $db->getAllIdsFromPubs();
                if(count($idPubs) == 0){
                    echo "Não existem publicaões!";
                }
                else{
                    foreach($idPubs as $ids){
                        $pubs = $db->getAllPubs($ids);
                        $autores = $db->getNameOfUserInPubs($ids);
                        $area = $db->getNameFromAreas($pubs['id_areas']);
                        echo "<di class='container'>";
                        echo "<h3>" . $pubs['titulo'] . "</h3>";
                        echo '<p><strong>Autores: </strong>'. nomes($autores) . ' <br> <strong>Area: </strong>' . $area . ' <br> <strong>Data: </strong>'. $pubs['data']. '<br> <strong>Hora: </strong>'.$pubs['hora']. '</p>';
                        //echo '<p class="text-muted"><strong>Autores: </strong>'. nomes($autores) . ' | Area: ' . $area . ' | Data/Hora: '. $pubs['data']. ', '.$pubs['hora']. '</p>';
                        $pathFoto = "uploads/". $pubs['foto'];
                        $pathDoc = "uploads/". $pubs['documento'];
                        //adicionar a foto
                        //echo "<img src=$pathFoto width='100px' height='50px' alt='image' class='pull-left img-responsive thumb margin10 img-thumbnail'>";
                        echo "<p><strong>Descrição: </strong>" . $pubs['descricao'] . "</p>";
                        if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1){
                            echo '<a class="btn btn-blog pull-right marginBottom10" href="' .$pathDoc.'" target="_blank">Ler Mais(PDF)</a>';
                            if($db->checkUserPubs($_SESSION['username'], $ids))
                            {
                                $idArea=$db->getIdFromAreas($area);
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id='.$pubs['id'].'&area='.$idArea.'">Editar</a>';
                            }
                            if($db->checkAdmin($_SESSION['username']) > 0){
                                $idArea = $db->getIdFromAreas($area);
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id=' . $pubs['id'] . '&area=' . $idArea . '">Editar</a>';
                            }
                        }
                        else {
                            echo '<a class="btn btn-blog pull-right marginBottom10" href="' .$pathDoc.'" target="_blank">Ler Mais(PDF)</a>';
                        }
                        echo "</di>";
                        echo "<hr>";
                    }
                }
            }else {
                if($_POST['areas'] == "Todas as publicações"){
                    $idPubs = $db->getAllIdsFromPubs();
                    if(count($idPubs) == 0){
                        echo "Não existem publicaões!";
                    }
                    else{
                        foreach($idPubs as $ids){
                            $pubs = $db->getAllPubs($ids);
                            $autores = $db->getNameOfUserInPubs($ids);
                            $area = $db->getNameFromAreas($pubs['id_areas']);
                            echo "<di class='container'>";
                            echo "<h3>" . $pubs['titulo'] . "</h3>";
                            echo '<p><strong>Autores: </strong>'. nomes($autores) . ' <br> <strong>Area: </strong>' . $area . ' <br> <strong>Data: </strong>'. $pubs['data']. '<br> <strong>Hora: </strong>'.$pubs['hora']. '</p>';
                            //echo '<p class="text-muted"><strong>Autores: </strong>'. nomes($autores) . ' | Area: ' . $area . ' | Data/Hora: '. $pubs['data']. ', '.$pubs['hora']. '</p>';
                            $pathFoto = "uploads/". $pubs['foto'];
                            $pathDoc = "uploads/". $pubs['documento'];
                            //adicionar a foto
                            //echo "<img src=$pathFoto width='100px' height='50px' alt='image' class='pull-left img-responsive thumb margin10 img-thumbnail'>";
                            echo "<p><strong>Descrição: </strong>" . $pubs['descricao'] . "</p>";
                            if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1){
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="' .$pathDoc.'" target="_blank">Ler Mais(PDF)</a>';
                                if($db->checkUserPubs($_SESSION['username'], $ids))
                                {
                                    $idArea=$db->getIdFromAreas($area);
                                    echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id='.$pubs['id'].'&area='.$idArea.'">Editar</a>';
                                }
                                if($db->checkAdmin($_SESSION['username']) > 0){
                                    $idArea = $db->getIdFromAreas($area);
                                    echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id=' . $pubs['id'] . '&area=' . $idArea . '">Editar</a>';
                                }
                            }
                            else {
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="' .$pathDoc.'" target="_blank">Ler Mais(PDF)</a>';
                            }
                            echo "</di>";
                            echo "<hr>";
                        }
                    }
                }else {
                    $idFromArea = $db->getIdFromAreas($_POST['areas']);
                    $allPubsFromIdArea = $db->getAllPubsFromIdArea($idFromArea);
                    if (count($allPubsFromIdArea) == 0) {
                        echo "Não existem publicaões dessa area!";
                    } else {
                        foreach ($allPubsFromIdArea as $ids) {
                            $pubs = $db->getAllPubs($ids);
                            $autores = $db->getNameOfUserInPubs($ids);
                            $area = $db->getNameFromAreas($pubs['id_areas']);
                            echo "<di class='container'>";
                            echo "<h3>" . $pubs['titulo'] . "</h3>";
                            echo '<p><strong>Autores: </strong>' . nomes($autores) . ' <br> <strong>Area: </strong>' . $area . ' <br> <strong>Data: </strong>' . $pubs['data'] . '<br> <strong>Hora: </strong>' . $pubs['hora'] . '</p>';
                            //echo '<p class="text-muted"><strong>Autores: </strong>'. nomes($autores) . ' | Area: ' . $area . ' | Data/Hora: '. $pubs['data']. ', '.$pubs['hora']. '</p>';
                            $pathFoto = "uploads/" . $pubs['foto'];
                            $pathDoc = "uploads/" . $pubs['documento'];
                            //adicionar a foto
                            //echo "<img src=$pathFoto width='100px' height='50px' alt='image' class='pull-left img-responsive thumb margin10 img-thumbnail'>";
                            echo "<p><strong>Descrição: </strong>" . $pubs['descricao'] . "</p>";
                            if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1) {
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="' . $pathDoc . '" target="_blank">Ler Mais(PDF)</a>';
                                if ($db->checkUserPubs($_SESSION['username'], $ids)) {
                                    $idArea = $db->getIdFromAreas($area);
                                    echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id=' . $pubs['id'] . '&area=' . $idArea . '">Editar</a>';
                                }
                                if($db->checkAdmin($_SESSION['username']) > 0){
                                    $idArea = $db->getIdFromAreas($area);
                                    echo '<a class="btn btn-blog pull-right marginBottom10" href="criar_publicacao.php?id=' . $pubs['id'] . '&area=' . $idArea . '">Editar</a>';
                                }
                            } else {
                                echo '<a class="btn btn-blog pull-right marginBottom10" href="' . $pathDoc . '" target="_blank">Ler Mais(PDF)</a>';
                            }
                            echo "</di>";
                            echo "<hr>";
                        }
                    }
                }
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