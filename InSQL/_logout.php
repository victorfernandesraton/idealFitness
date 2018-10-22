<?php
 
// INICIAR SEÇÃO
session_start();
 
// MUDA O VALOR DE LOGIN PARA FALSE = FIM DA SESSION
$_SESSION['login'] = false;
 
// FINALIZA A SEÇÃO
session_destroy();
 
// retorna para a index.php
header('Location: ../../index.php');