<?php

    // CRIANDO CONEXÃO
    require_once"../arquivosRequire/_init.php";
    $cx = db_connect();


    // COMANDO QUERY INSERT
    $query1 = 'INSERT INTO freepass (nome,cpf,mail,tel,esporte,datac) VALUES (:nome,:cpf,:mail,:tel,:esporte,:datac)';

    // COMANDO PREPARE QUE VERIFICA SE HOUVE TENTATIVA DE SQL INJECT
    $insert1 = $cx->prepare($query1);
    $datac = date('Y-m-d') ."\n";


    // INPUTS DE VARIAVEIS DO FORM NO BANCO
    $insert1->bindValue(':nome', $nome); // input
    $insert1->bindValue(':cpf', $cpf);
    $insert1->bindValue(':mail',$mail);
    $insert1->bindValue(':tel',$tel);
    $insert1->bindValue(':esporte',$esporte);
    $insert1->bindValue(':datac',$datac);

    
    // EXECUTA O O INSERT APLICANDO AO COMANDO QUERY1
    $insert1->execute();

    