<!DOCTYPE html>
<html lang="en">
<head>
  <title>LABSI2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style/style.css" rel="stylesheet" type="text/css" media="all" />
  <style>
  </style>
</head>
<body>
<?php include ('db.php'); ?> 
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Início</a></li>
        <li><a href="#">Equipa</a></li>
        <li><a href="#">Coordenadora</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="#">Localização</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Registar</a>
        	<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
				<form class="form-horizontal" action="registo.php"  method="post" accept-charset="UTF-8">
					<input class="form-control register" type="text" name="regsName" placeholder="Nome.." required />
                    <input class="form-control register" type="text" name="regsEmail" placeholder="Email.."  required />
				  	<input class="form-control register" type="password" name="regsPass" placeholder="Password.." required/>
                    <input class="form-control register" type="password" name="regsConfPass" placeholder="Confirme a sua password.." required/>
                    <select class="form-control register" name="tipoUtilizador" required>
                    	<option selected disabled hidden > Tipo de Utilizador </option>
                        <?php
							$db = new Labsi2_db();
							$db ->connect();
							
							$id_tipoUtilizador = $db->getAllNamesFromTipoUtilizadores();
							
							foreach ($id_tipoUtilizador as $nomes) {
									echo "<option value='$nomes'>" . $nomes . "</option>";
								}
							$db -> close_connect();		
						?>
                    </select>
				  	<input class="btn btn-primary" type="submit" name="Registar" value="Registar" />
				</form>
            </div>
        </li>
        <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sessão </a>
			<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
				<form class="form-horizontal"  method="post" accept-charset="UTF-8">
					<input class="form-control login" type="text" name="logName" placeholder="Nome.." required/>
				  	<input class="form-control login" type="password" name="logPass" placeholder="Password.." required/>
				  	<input class="btn btn-primary" type="submit" name="Iniciar" value="Iniciar Sessão" />
				</form>
            </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid wraper">    
  <div>
    <div class="col-sm-2 sidenav">
      <div class="left-navigation">
		<ul class="list">
				<h5><strong>MENU</strong></h5>
				<li>Missão</li>
				<li>Área Estratégica de Informação</li>
				<li>Tipologias de Atuação</li>
				<li>Inevegação</li>
			</ul>
   	  </div>
    </div>
  <div class="col-sm-8 textcontent"> 
   	<h2 class="title">LabSI2 - Laboratório de Sistemas de Informação e de Interatividade</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <hr>
  </div>
  </div>
</div>
<footer class="footer">
  <p>Footer Text</p>
</footer>
</body>
</html>