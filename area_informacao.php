<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
    <meta charset="utf-8">
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
    <?php include('sidenav.php'); ?>
    <br>
    <div class="col-sm-8 textcontent">
        <h1 class="title"><strong>�rea Estrat�gica de Informa��o</strong></h1>
        <br><br><br><br>
        <p class="paragraph">Tecnologias do Conhecimento e Criatividade Multime?dia. (CNAEF 481-Ci�ncias Inform�ticas e 523-Electr�nica e Automa��o,
            FOS 1.2 Ci�ncias da computa��o e ci�ncias da informa��o e 2.2 - Engenharia eletrot�cnica, eletr�nica e inform�tica) (Descrever a �rea estrat�gica
            de interven��o, tendo em conta as �reas de interven��o estrat�gica do Plano Estrat�gico do IPBeja, e com a indica��o das �reas CNAEF e FOS).
        </p>
        <hr>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>