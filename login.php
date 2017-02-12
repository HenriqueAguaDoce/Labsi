<?php
include ('db.php');



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Iniciar"])){
$db = new Labsi2_db();
$db ->connect();
$password = test_input($_POST["logPass"]);
$username = test_input($_POST["logName"]);

$hashPassword  = $db -> getUserPass($username);


$hashPassword = $hashPassword['password'];
if($hashPassword == null){
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('O utilizador não existe !')
    window.location.href='index.php';
    </SCRIPT>");
}

$checkUser = hash_equals($hashPassword, crypt($password, $hashPassword));


if($checkUser == true){
	
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['validUser'] = 1;
	
	$duration = (5 * 60);
 	
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + $duration;
    
	
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Sessão iniciada com sucesso!')
    window.location.href='index.php';
    </SCRIPT>");
	$db -> close_connect();

} else {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Nome/Password incorrectos')
	window.location.href='index.php';
    </SCRIPT>");
	$db -> close_connect();
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
	
?>