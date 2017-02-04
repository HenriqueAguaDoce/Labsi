<?php 
session_start();
session_unset();
session_destroy();  echo ("<SCRIPT LANGUAGE='JavaScript'>
window.alert('Sessão terminada com sucesso!')
window.location.href='index.php';
</SCRIPT>"); ?>