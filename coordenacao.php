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
$current = 'coordenacao';
include ('db.php'); 

include ('session.php');

include('header.php'); 
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
    <br>
    <div class="col-sm-8 textcontent">  
        <h1 class="title"><strong>Coordenação</strong></h1>
    	<br><br><br><br>
    	<h4><strong>Coordenadora</strong></h4>
        <br> 
    	<p>
        	Isabel Sofia Sousa Brito<br>
            Correio eletrónico: <a href="mailto:isabel.sofia@ipbeja.pt">isabel.sofia@ipbeja.pt</a><br>
            Telefone: +351 284 311 540/3<br>
            Localização: Edifício da ESTIG</p>
        <br>
    </div>
</div>
<?php
include('footer.php'); 
?>
</body>
</html>