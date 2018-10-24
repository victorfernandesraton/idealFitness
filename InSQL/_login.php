<?php

session_start();
$_SESSION['login'] = '';
$_SESSION['debug'] = '';
$mail = $senha = '';

// ATRIBUINDO VALORES INICIAIS A VARIAVEIS
if (!(empty($_POST['l_matricula'])))  {
    $matricula=$_POST['l_matricula'];
    $senha = sha1($_POST['senha']);    
} else {
    $_SESSION['debug'] = "Prencha corretamente os campos";
    echo "<script>alert('Prencha email');
            location.href='../Financeiro/financeiro.php';</script>"; 
}
if (!(empty($_POST['senha'])))  {
    $senha=$_POST['senha'];
    $senha = sha1($_POST['senha']);    
} else {
    $_SESSION['debug'] = "Campo senha vazio";
    echo "<script>alert('Prencha senha');
            location.href='../Financeiro/financeiro.php';</script>"; 
}


// CONEXÃO
require_once '../arquivosRequire/_init.php';
$cx = db_connect();

// QUERRY ADMIN
$query2 = "SELECT mail,senha FROM admin WHERE mail = :matricula AND senha = :senha";
$stmt2 = $cx->prepare($query2);
$stmt2->bindValue(':matricula',$matricula);
$stmt2->bindValue(':senha',$senha);
$stmt2->execute();
$user2 = $stmt2->fetch(PDO::FETCH_ASSOC);
$truesenha2 = $user2['senha'];

// QUERRY ALUNOS
$query1 = "SELECT id,senha,nome FROM aluno WHERE id = :matricula AND senha = :senha";
$stmt1 = $cx->prepare($query1);
$stmt1->bindValue(':matricula' ,$matricula);
$stmt1->bindValue(':senha',$senha);
$stmt1->execute();
$user1 = $stmt1->fetch(PDO::FETCH_ASSOC);
$truesenha = $user1['senha'];


if (!(empty($user2))) {
    $senha = sha1($_POST['senha']);
    if ($senha == $truesenha2) {
    $_SESSION['login'] = $user2['mail'];
    header('Location: ../Financeiro/admin.php');
    }

} else if (!(empty($user1))) {

        $senha = sha1($_POST['senha']);
        if ($senha == $truesenha) {
        $_SESSION['login'] = $user1['id'];
        $_SESSION['nome'] == $user1['nome'];
        header('Location: ../Financeiro/financeiro2.php');
        } else if(empty($_POST['senha'])) {
            $_SESSION['user1'] = false;
            $_SESSION['debug'] = "Campo senha vazio";
            echo "<script>alert('Campo senha vazio');
            location.href='../Financeiro/financeiro.php';</script>";
        }
            else {
                $_SESSION['debug'] = "Senha inválida";
               echo "<script>alert('Senha invalida');
            location.href='../Financeiro/financeiro.php';</script>"; 
    }
} else {
    $_SESSION['debug'] = "Usuário inválido";
    echo "<script>alert('Usuário inválido');
            location.href='../Financeiro/financeiro.php';</script>"; 
    

}

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




 