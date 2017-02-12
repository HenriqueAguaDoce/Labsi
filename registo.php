<?php
include ('db.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Registar"])){
$db = new Labsi2_db();
$db ->connect();

$nome = test_input($_POST["regsName"]);
$checkUser = $db->getUserName($nome); 
$nomeBool; 
if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
	$nomeBool = false;
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Apenas são permitidas letras e espaços em branco !')
	window.location.href='index.php';
    </SCRIPT>");
}
else{
	if($checkUser == true){
		$nomeBool = false;
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
    	window.alert('O nome já existe, por favor altere o seu nome !')
    	window.location.href='index.php';
    	</SCRIPT>");
	} 
	$nomeBool = true;
}

$email = test_input($_POST["regsEmail"]);
$emailBool;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailBool = false;
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Email inválido !')
	window.location.href='index.php';
    </SCRIPT>");
}
else{
	$emailBool = true;
}

if(isset($_POST["tipoUtilizador"])){
	$id_tipoUtilizador = $db->getIdFromTipoUtilizadores($_POST["tipoUtilizador"]);
}

$password = test_input($_POST["regsPass"]);

$confirmPass = test_input($_POST["regsConfPass"]); 


if(($emailBool == true) && ($nomeBool == true)){
	
	if(($password == $confirmPass)){
	$cost = 10;
	$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
	$salt = sprintf("$2a$%02d$", $cost) . $salt;
	$hash = crypt($password, $salt);	
	$db->insertUser($nome, $email , $hash,$id_tipoUtilizador, 0);
	$db -> close_connect();
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Registo efectuado com sucesso!')
    window.location.href='index.php';
    </SCRIPT>");
} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('As passwords são diferentes!')
	window.location.href='index.php';
    </SCRIPT>");
	$db -> close_connect();
}

}
	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>