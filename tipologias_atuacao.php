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
        <h1 class="title"><strong>Tipologias de Atuação</strong></h1>
    	<br><br><br><br>
    	<p>Sistemas de informação interativos e aplicações para pessoas com necessidades especiais (CNAEF 481-Ciências Informáticas e
			523-Eletrónica e Automação, FOS 1.2 Ciências da computação e ciências da informação e 2.2 - Engenharia eletrotécnica, eletrónica
			e informática) (Indicar num texto/frase de duas linhas uma descrição das áreas de intervenção, com indicação do(s) código(s)
			CNAEF e FOS).
		</p>
    	<hr>
    </div>
</div>
<?php
include('footer.php'); 
?>
</body>
</html>