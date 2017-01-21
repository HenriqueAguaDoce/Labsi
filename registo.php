<?php
include ('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Registar"])){
$db = new Labsi2_db();
$db ->connect();

$id_tipoUtilizador = $db->getIdFromTipoUtilizadores($_POST["tipoUtilizador"]);
$nome = $_POST["regsName"];
$email = $_POST["regsEmail"];
$password = $_POST["regsPass"];
$confirmPass = $_POST["regsConfPass"]; 
if($password == $confirmPass){
	$db->insertUser($nome, $email , $password, $id_tipoUtilizador);
	$db -> close_connect();
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registo efectuado com sucesso!')
    window.location.href='index.php';
    </SCRIPT>");
} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('As passwords são diferentes!')
    </SCRIPT>");
	$db -> close_connect();
}
}
