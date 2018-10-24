<?php
    session_start();
    // CRIANDO CONEXÃO
    require_once "../arquivosRequire/_init.php";
    $cx = db_connect();
    // COMANDO QUERY INSERT
    $stmt1 = 'INSERT INTO aluno (nome,cpf,mail,tel,senha,datav) VALUES (:nome,:cpf,:mail,:tel,:senha,:datav)';
    $_SESSION['frist'] = 'NOME';
    // COMANDO PREPARE QUE VERIFICA SE HOUVE TENTATIVA DE SQL INJECT
    $insert1 = $cx->prepare($stmt1);
    $datav = date('Y-m-d') ."\n";
    // INPUTS DE VARIAVEIS DO FORM NO BANCO
    $insert1->bindValue(':nome', $nome); // input
    $insert1->bindValue(':cpf', $cpf);
    $insert1->bindValue(':mail',$mail);
    $insert1->bindValue(':tel',$tel);
    $insert1->bindValue(':senha',$senha);
    $insert1->bindValue(':datav',$datav);
    
    // EXECUTA O O INSERT APLICANDO AO COMANDO QUERY1
    $insert1->execute();

    if ($_SESSION['frist'] = "NOME") {
        $_SESSION['login'] = $mail;
        header ('Location: ../Financeiro/financeiro2.php ');
    } else header ('Location: ../Financeiro/financeiro.php ');
    