<?php

    // CRIANDO CONEXÃO
    require_once "../arquivosRequire/_init.php";
    $cx = db_connect();


    // COMANDO QUERY INSERT
    $stmt1 = 'INSERT INTO aluno (nome,cpf,mail,tel,senha,datav,matricula) VALUES (:nome,:cpf,:mail,:tel,:senha,:datav,:matricula)';

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

    