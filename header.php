<header>
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
        <li <?php if($current == 'inicio'){echo 'class="active"';}?> ><a href="index.php">LabSI2</a></li>
        <li <?php if($current == 'equipa'){echo 'class="active"';}?> ><a href="equipa.php">Equipa</a></li>
        <li <?php if($current == 'coordenacao'){echo 'class="active"';}?> ><a href="coordenacao.php">Coordenação</a></li>
        <li <?php if($current == 'contactos'){echo 'class="active"';}?> ><a href="contactos.php">Contactos</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      
        <?php if (isset($_SESSION['validUser']) AND $_SESSION['validUser'] == 1) :?>
        <li>
        	<a href="profile.php">
				<span class="glyphicon glyphicon-user"></span> <?php echo($_SESSION['username']) ?>
            </a>
        </li>
        <li>
        	<a href="logout.php">
        		<span class="glyphicon glyphicon-log-out"></span> Sair
            </a>
        </li>
        <?php else: ?>
      	<li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Registar</a>
        	<div class="dropdown-menu" style="padding: 15px; padding-bottom: 10px;">
				<form class="form-horizontal" action="registo.php"  method="post" accept-charset="UTF-8">
					<input class="form-control register" type="text" name="regsName" placeholder="Nome.." required />
                    <input class="form-control register" type="text" name="regsEmail" placeholder="Email.."  required />
				  	<input class="form-control register" type="password" name="regsPass" placeholder="Password.." required/>
                    <input class="form-control register" type="password" name="regsConfPass" placeholder="Confirme a sua password.." required/>
                    <select required class="form-control register" name="tipoUtilizador">
                    	<option selected disabled hidden value=""> Tipo de Utilizador </option>
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
				<form class="form-horizontal" action="login.php"  method="post" accept-charset="UTF-8">
					<input class="form-control login" type="text" name="logName" placeholder="Nome.." required/>
				  	<input class="form-control login" type="password" name="logPass" placeholder="Password.." required/>
				  	<input class="btn btn-primary" type="submit" name="Iniciar" value="Iniciar Sessão" />
				</form>
            </div>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
</header>