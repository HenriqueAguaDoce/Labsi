<!DOCTYPE html>
<html lang="en">
<head>
<title>LABSI2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php 

$current = 'inicio';

include ('db.php'); 

include ('session.php');

include('header.php'); 
?>

<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
	<br>
  	<div class="col-sm-8 textcontent"> 
   		<h2 class="title"><strong>LabSI2 - Laboratório de Sistemas de Informação e de Interatividade</strong></h2>
		<a class="image"><img src="images/labsi.png" width="800" height="400" alt="labsi" /></a>
    	<p>O Laboratório de Sistemas de Informação e Interatividade (LabSI2) tem como missão contribuir, através do recurso às novas tecnologias da informação e
			comunicação, para a competitividade das empresas e melhoria da qualidade de vida de todas as pessoas sem exceção.
		</p>
        <hr>
    	<p>Nesse sentido, desenvolve sistemas tecnológicos de apoio a pessoas com necessidades especiais, tais como crianças, pessoas portadoras de deficiência e
			idosos. Com vista à concretização da sua missão o LabSI2 está empenhado no desenvolvimento de infra-estruturas, produtos e serviços inovadores de base
			tecnológica que possam contribuir para o progresso económico e social da região e do país em diversas áreas.
		</p>
        <hr>
    	<p>A realização deste site surgiu no âmbito da disciplina Projeto Integrado 3 pertencente ao Curso Técnico e Superior Profissional de Tecnologias Web e
			Dispositivos Móveis na Escola Superior de Tecnologia e Gestão, do Instituto Politécnico de Beja.
		</p>
		<br><br><br><br>
	</div>
</div>

<?php
include('footer.php'); 
?> 
</body>
</html>