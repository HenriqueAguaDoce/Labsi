<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>LABSI2</title>
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
    <?php include('sidenav.php')
    ?>
    <br>
    <div class="col-sm-8 textcontent">
        <h1 class="title"><strong>Publicação</strong></h1>
        <br><br><br><br>
        <form class="form-horizontal" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <?php
                $db = new Labsi2_db();
                $db ->connect();

                if(isset($_GET['id'])){
                    $pubs = $db->getAllPubs($_GET['id']);
                    echo '<input type="text" name="titulo" value="' .$pubs['titulo'].'" class="form-control" id="titulo" required>';
                }
                else{
                    echo '<input type="text" name="titulo" class="form-control" id="titulo" required>';
                }
                $db -> close_connect();
                ?>
            </div>
            <div class="form-group">
                <label for="areas">Tipo de Areas</label>
                <select required class="form-control" name="areas">
                    <?php
                    $db = new Labsi2_db();
                    $db ->connect();

                    if(isset($_GET['id'])){
                        $pubs = $db->getAllPubs($_GET['id']);
                        if($pubs['id_areas'] == 1){
                            $nome = $db->getNameFromAreas(1);
                            echo "<option selected value='$nome'>" . $nome . "</option>";
                            $nome = $db->getNameFromAreas(2);
                            echo "<option value='$nome'>" . $nome . "</option>";
                        }
                        else{
                            $nome = $db->getNameFromAreas(2);
                            echo "<option selected value='$nome'>" . $nome . "</option>";
                            $nome = $db->getNameFromAreas(1);
                            echo "<option value='$nome'>" . $nome . "</option>";
                        }
                    }
                    else{
                        echo '<option selected disabled hidden> Escolha a Area Pretendida </option>';
                        $areas = $db->getAllNamesFromAreas();

                        foreach ($areas as $nomes) {
                            echo "<option value='$nomes'>" . $nomes . "</option>";
                        }
                    }
                    $db -> close_connect();
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="texto">Texto</label>
                <?php
                $db = new Labsi2_db();
                $db ->connect();

                if(isset($_GET['id'])){
                    $pubs = $db->getAllPubs($_GET['id']);
                    echo '<textarea required class="form-control" name="texto" id="texto" rows="3">' . $pubs['descricao'] . '</textarea>';
                }
                else{
                    echo '<textarea required class="form-control" name="texto" id="texto" rows="3"></textarea>';
                }
                $db -> close_connect();
                ?>
            </div>
            <div class="form-group">
                <label for="fileToUpload">Escolha uma fotografia</label>
                <?php
                if(isset($_GET['id'])){
                    echo '<input type="file" name="fileToUpload" class="form-control-file" id="fileToUpload">';
                }
                else{
                    echo '<input required type="file" name="fileToUpload" class="form-control-file" id="fileToUpload">';
                }
                ?>
            </div>
            <?php
            if(isset($_GET['id'])){
            echo '<input class="btn btn-primary" type="submit" name="Alterar" value="Alterar" style="margin-right: 10px; padding: " />';
            echo '<input class="btn btn-primary" type="submit" name="Eliminar" value="Eliminar" />';
            }
            else{
            echo '<input class="btn btn-primary" type="submit" name="Publicar" value="Publicar" />';
            }
            ?>
        </form>
    </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Publicar"])) {
    $db = new Labsi2_db();
    $db->connect();

    $nome = $_SESSION['username'];
    $titulo = test_input($_POST["titulo"]);
    $descricao = test_input($_POST["texto"]);
    $data = date("Y/m/d");
    date_default_timezone_set('Europe/Lisbon');
    $hora = date("H:i:s");
	$target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $foto = $_FILES["fileToUpload"]["name"];
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

    $id_areas = $db->getIdFromAreas($_POST['areas']);

    $db->insertPub($titulo, $descricao, $foto, $data, $hora, $id_areas);
    $id_publicacoes = $db ->getIdFromPub($titulo, $descricao, $id_areas);
    $id_utilizadores = $db ->getIdFromUsers($nome);
    $db->insertUsersPubs($id_utilizadores, $id_publicacoes);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Publicação efectuada com sucesso!')
    window.location.href='publicacoes_recentes.php';
    </SCRIPT>");

    $db->close_connect();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Alterar"])) {
    $db = new Labsi2_db();
    $db->connect();

    $nome = $_SESSION['username'];
    $titulo = test_input($_POST["titulo"]);
    $descricao = test_input($_POST["texto"]);
    $id_areas = $db->getIdFromAreas($_POST['areas']);

    $db->updatePub($_GET['id'], $titulo, $descricao, $id_areas);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Publicação alterada com sucesso!')
    window.location.href='publicacoes_recentes.php';
    </SCRIPT>");

    $db->close_connect();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Eliminar"])) {
    $db = new Labsi2_db();
    $db->connect();

    $db->deletePub($_GET['id']);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Publicação eliminada com sucesso!')
    window.location.href='publicacoes_recentes.php';
    </SCRIPT>");

    $db->close_connect();
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>