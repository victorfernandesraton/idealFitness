<?php

session_start();

$mail = $senha = '';

// ATRIBUINDO VALORES INICIAIS A VARIAVEIS
if (!(empty($_POST['l_mail'])))  {
    $mail=$_POST['l_mail'];
    $senha = sha1($_POST['senha']);    
} else {
    echo "<script>alert('Prencha email');
            location.href='../Financeiro/financeiro.php';</script>"; 
    
}


// CONEXÃO
require_once '../arquivosRequire/_init.php';
$cx = db_connect();

// QUERY ALUNOS
$query = "SELECT mail,senha FROM aluno WHERE mail = :mail";
$stmt = $cx->prepare($query);
$stmt->bindValue(':mail',$mail);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$truesenha = $user['senha'];


// VERIFICA FORM LOGIN

    if (!(empty($user))) {
        $senha = sha1($_POST['senha']);
        if ($senha == $truesenha) {
        session_start();
        $_SESSION['login'] = $user['mail'];
        header('Location: ../Financeiro/Financeiro2.php');
        } else if(empty($_POST['senha'])) {
            $_SESSION['user'] = false;
        
            echo "<script>alert('Campo senha vazio');
            location.href='../Financeiro/financeiro.php';</script>";
        }
            else {
               echo "<script>alert('Senha invalida');
            location.href='../Financeiro/financeiro.php';</script>"; 
    }
} else echo "<script>alert('Nenhum usuário cadastrado');
location.href='../CadastroNovoAluno/cadastroNovoAluno.php';</script>"; 


//     // CRIAR SEÇÃO COM DADOS DE USUARIO
//     $user = $users[0];
//     session_start();
//     $_SESSION['login'] = true;
//     $_SESSION['user_id'] = $user['mail'];
//     header('Location: ../Financeiro/Financeiro2.php');

//     }  else {
//         $_SESSION['login'] = false;
//         echo "<script>alert('usuario não existe')</script>";
//     } 
// } else echo  "eeee";




 