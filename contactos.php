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
$current = 'contactos';
include ('db.php'); 

include ('session.php');

include('header.php'); 
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
    <br>
    <div class="col-sm-8 textcontent">  
    	<h1 class="title"><strong>Contactos</strong></h1>
        <br> <br><br><br>
    	<p>
        	Isabel Sofia Sousa Brito<br>
            Correio eletrónico: <a href="mailto:isabel.sofia@ipbeja.pt">isabel.sofia@ipbeja.pt</a><br>
            Telefone: +351 284 311 540/3<br></p>
        <br>
    	<p>
        	Escola Superior de Tecnologia e Gestão, Laboratório 15<br>
            Campus do Instituto Politécnico de Beja<br>
            Rua Pedro Soares<br>
            7800-295 Beja</p>
        <br>
        <section class="contact">
            <div class="container">
                <div class="col-md-8 slideanim">
                    <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1441.256096487983!2d-7.874682952389801!3d38.01441657637857!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa61299486a3e9763!2sEscola+Superior+de+Tecnologia+e+Gest%C3%A3o+de+Beja!5e0!3m2!1spt-PT!2spt!4v1486492393499" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="clearfix"></div>
            </div>
        </section>
    </div>
</div>
<?php
include('footer.php'); 
?>
</body>
</html>