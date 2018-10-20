<?php
// RESETA A SEÇÃO
session_unset();

// CABEÇARIO
require_once 'head.php';

// ATRIBUINDO VALORES INICIAIS A VARIAVEIS
if (!(empty($_POST['l_mail'])) || !(empty($_POST['l_senha']))) {
    $mail=$_POST['l_mail'];
    $senha = sha1($_POST['l_senha']);    
} else $mail = $senha = 'not';


// CONEXÃO
require_once '_init.php';
$cx = db_connect();

// QUERY ALUNOS
$query = "SELECT id,nome,cpf,mail,tel FROM aluno WHERE mail = :mail AND senha = :senha;";
$stmt = $cx->prepare($query);
$stmt->bindValue(':mail',$mail);
$stmt->bindvalue(':senha',$senha);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// VERIFICA FORM LOGIN
if ($mail != 'not') {
    

    if (!(empty($user))) {
    
    // CRIAR SEÇÃO COM DADOS DE USUARIO
    $user = $users[0];
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    header('Location: _showall.php');

    }  else {
        echo "<script>alert('usuario não contas')</script>";
    }
}


?>
 