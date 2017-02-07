<!doctype html>
<html>
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
$current = 'equipa';
include ('db.php'); 

include ('session.php');

include('header.php'); 
?>
<div class="container-fluid wraper">
	<?php include('sidenav.php') ?>
    <br>
    <div class="col-sm-8 textcontent">  
        <h1 class="title"><strong>Equipa</strong></h1>
        <br><br><br><br>
        <h4><strong>Docentes</strong></h4>
        <br> 
        <p>
        Isabel Sofia Sousa Brito<br>
        Correio eletrónico: <a href="mailto:isabel.sofia@ipbeja.pt">isabel.sofia@ipbeja.pt</a><br>
        Telefone: +351 284 314 400<br>
        Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Elsa da Piedade Chinita Soares Rodrigues<br>
            Correio eletrónico: <a href="mailto:elsa.rodrigues@ipbeja.pt">elsa.rodrigues@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            João Paulo Barros<br>
            Correio eletrónico: <a href="mailto:joao.barros@ipbeja.pt">joao.barros@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            João Paulo de Almeida Lança Trindade<br>
            Correio eletrónico: <a href="mailto:joao.trindade@ipbeja.pt">joao.trindade@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Luís Carlos da Silva Bruno<br>
            Correio eletrónico: <a href="mailto:lbruno@ipbeja.pt">lbruno@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Luís Filipe Nobre Horta Baptista Garcia<br>
            Correio eletrónico: <a href="mailto:luisbgarcia@ipbeja.pt">luisbgarcia@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Maria Teresa Abreu Luís Godinho<br>
            Correio eletrónico: <a href="mailto:mtgodinho@ipbeja.pt">mtgodinho@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Pedro Manuel Mendonça da Silva Cravo<br>
            Correio eletrónico: <a href="mailto:pedro.cravo@ipbeja.pt">pedro.cravo@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Rui Manuel Carvalho Pais<br>
            Correio eletrónico: <a href="mailto:rui.pais@ipbeja.pt">rui.pais@ipbeja.pt</a><br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <br>
        <h4><strong>Investigadores</strong></h4>
        <br>
        <p>
            Gonçalo Fontes<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Luís Alexandre<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <br>
        <h4><strong>Alunos</strong></h4>
        <br>
        <p>
            Pedro Santos (aluno de Mestrado)<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Nelso Ventura (aluno de Mestrado)<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Suzete Barata (aluna de Mestrado)<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Diogo Pina Manique (aluno Licenciatura)<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <hr>
        <p>
            Emanuel Teixeira (aluno Licenciatura)<br>
            Telefone: +351 284 314 400<br>
            Localização: Edifício da ESTIG</p>
        <br>
    </div>
</div>
<?php
include('footer.php'); 
?>
</body>
</html>