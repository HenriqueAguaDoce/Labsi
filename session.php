<?php 
session_start();
   
if (isset($_SESSION['username'])) {
    $now = time(); // Checking the time now when home page starts.
    
    if ($now > $_SESSION['expire']) {
        session_unset();
        session_destroy();
		echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('A sessão expirou por inatividade!')
    window.location.href='index.php';
    </SCRIPT>");
     } else {
		$duration = (5 * 60);
   	 	$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + $duration;
	 }
}
?>