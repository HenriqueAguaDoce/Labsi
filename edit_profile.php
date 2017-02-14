<?php
include ('db.php');
include ('session.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Guardar"])) {
    $db = new Labsi2_db();
    $db->connect();

    $idUser = $db->getIdFromUser($_SESSION['username']);


    if(!empty($_FILES["fotoToUpload"]["name"])){
        $foto = $_FILES["fotoToUpload"]["name"];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto);
        move_uploaded_file($_FILES["fotoToUpload"]["tmp_name"], $target_file);

        $db->updateUserFoto($idUser, $foto);
    }

    $nomeUsername = test_input($_POST["nome"]);

    $descricao = test_input($_POST["descricao"]);
    $email = test_input($_POST["email"]);
    $id_tipoUtilizador = $db->getIdFromTipoUtilizadores($_POST["tipoUtilizador"]);
    $db->updateUsers($idUser, $nomeUsername, $descricao, $email, $id_tipoUtilizador);
    $_SESSION['username'] = $nomeUsername;

    if(!empty($_POST['pass'])) {
        $password = test_input($_POST["pass"]);
        $confirmPass = test_input($_POST["confPass"]);

        if (($password == $confirmPass)) {
            $cost = 10;
            $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
            $salt = sprintf("$2a$%02d$", $cost) . $salt;
            $hash = crypt($password, $salt);

            $db->updateUserPass($idUser, $hash);
        }
    }

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Conta de utilizador guardada e alterada com sucesso!')
    window.location.href='profile.php';
    </SCRIPT>");

    $db->close_connect();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Eliminar"])) {
    $db = new Labsi2_db();
    $db->connect();

    $idUser = $db->getIdFromUser($_SESSION['username']);
    $db->deteleUser($idUser);

    session_start();
    session_unset();
    session_destroy();

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Conta de utilizador eliminada com sucesso!')
    window.location.href='index.php';
    </SCRIPT>");

    $db->close_connect();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Cancelar"])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('As alterações que fez não foram efetuadas com sucesso!')
    window.location.href='index.php';
    </SCRIPT>");
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>