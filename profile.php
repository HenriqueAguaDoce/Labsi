<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style/style2.css" rel="stylesheet" type="text/css" media="all" />
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
    <div class="col-sm-8 textcontent">
        <h1 class="title" style="padding-right: 70px"><strong>Editar Perfil</strong></h1>
        <br><br>
        <form class="form-horizontal" action="edit_profile.php"  method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <div class="row">
            <!-- left column -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group text-center">
                    <?php
                    $db = new Labsi2_db();
                    $db -> connect();

                    $id = $db->getIdFromUsers($_SESSION['username']);

                    $foto = $db->getAllFieldsFromUser($id);


                    if(!empty($foto['foto'])){
                        $pathFoto = "uploads/". $foto['foto'];
                        echo '<img src="'.$pathFoto.'" width="220" height="178"/>';
                    }
                    else{
                        echo '<img src="" width="280" height="178"/>';
                    }


                    $db -> close_connect();
                    ?>
                    <h6>Atualize uma nova fotografia</h6>
                    <input type="file" class="form-control-file text-center center-block well-sm" name="fotoToUpload" id="fotoToUpload">
                </div>
                <br>
                <div class="form-group">
                    <label for="descricao">Descrição</label>

                    <?php
                    $db = new Labsi2_db();
                    $db -> connect();

                    $id = $db->getIdFromUsers($_SESSION['username']);

                    $descricao = $db->getAllFieldsFromUser($id);
                    echo '<textarea class="form-control" name="descricao" id="descricao" rows="3" cols="5">'.$descricao['descricao'].'</textarea class="form-control">';

                    $db -> close_connect();
                    ?>
                </div>
                <br>
                <div class="form-group">
                    <label for="descricao">Deseja eliminar a sua conta atual?</label>
                    <form class="form-horizontal" action="edit_profile.php"  method="post" accept-charset="UTF-8">
                        <?php
                        echo '<input class="btn btn-primary" name="Eliminar" value="Eliminar" type="submit" />';
                        ?>
                    </form>
                </div>
            </div>
            <span></span>
            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                <h3 class="title"><strong>Informações Pessoais</strong></h3>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Nome:</label>
                    <div class="col-md-8">
                        <input class="form-control" name="nome" value="<?php echo($_SESSION['username']) ?>" type="text">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Tipo de Utilizador:</label>
                    <div class="col-md-8">
                        <select required class="form-control" name="tipoUtilizador">
                            <?php
                            $db = new Labsi2_db();
                            $db ->connect();

                            $id = $db->getIdFromUsers($_SESSION['username']);

                            $nome_tipoUtilizador = $db->getAllNamesTipoUtilizadoresFromIdTipoUtilizadores($_SESSION['username']);
                            echo "<option selected value='".$nome_tipoUtilizador['nome']."'>" . $nome_tipoUtilizador['nome'] . "</option>";

                            $id_tipoUtilizador = $db->getAllNamesFromTipoUtilizadores();

                            foreach ($id_tipoUtilizador as $nomes) {
                                if($nomes != $nome_tipoUtilizador){
                                    echo "<option value='$nomes'>" . $nomes . "</option>";
                                }
                            }
                            $db -> close_connect();
                            ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Email:</label>
                    <div class="col-md-8">
                        <?php
                        $db = new Labsi2_db();
                        $db -> connect();

                        $id = $db->getIdFromUsers($_SESSION['username']);

                        $email = $db->getAllFieldsFromUser($id);
                        echo "<input class='form-control' name='email' type='text' value='" . $email['email'] . "'>";

                        $db -> close_connect();
                        ?>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Password:</label>
                    <div class="col-md-8">
                        <input class="form-control" name="pass" placeholder="Password.." type="password">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label">Confirme password:</label>
                    <div class="col-md-8">
                        <input class="form-control" name="confPass" placeholder="Confirme a sua password.." type="password">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <?php
                    echo '<input class="btn btn-primary" name="Guardar" value="Guardar" type="submit" style="margin-right: 10px; padding: " />';

                    echo "<span></span>";

                    echo '<input class="btn btn-primary" name="Cancelar" value="Cancelar" type="submit" />';
                    ?>
                </div>
            </div>

        </div>
        </form>
        <div>
            <br><br><br><br>
            <h2 class="title" style="padding-right: 70px"><strong>Estatisticas</strong></h2>
            <br><br>
            <table class="table">
                <tr>
                    <td class="td">Número total de projetos</td>
                    <?php
                    $db = new Labsi2_db();
                    $db -> connect();


                    $projetos = $db->getAllProjsFromUserName($_SESSION['username']);

                    echo '<td>'.$projetos['total'].'</td>';

                    $db -> close_connect();
                    ?>

                </tr>
                <tr>
                    <td>Número total de publicações</td>
                    <?php
                    $db = new Labsi2_db();
                    $db -> connect();


                    $publicacoes = $db->getAllPubsFromUserName($_SESSION['username']);

                    echo '<td>'.$publicacoes['total'].'</td>';

                    $db -> close_connect();
                    ?>
                </tr>
            </table>
        </div>
        <br><br><br><br>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>