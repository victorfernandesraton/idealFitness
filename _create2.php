<?php

    // CRIANDO CONEXÃO
    require_once"_init.php";
    $cx = db_connect();


    // COMANDO QUERY INSERT
    $query1 = 'INSERT INTO freepass (nome,cpf,mail,tel,senha,esporte) VALUES (:nome,:cpf,:mail,:tel,:senha,:esporte)';

    // COMANDO PREPARE QUE VERIFICA SE HOUVE TENTATIVA DE SQL INJECT
    $insert1 = $cx->prepare($query1);

    // INPUTS DE VARIAVEIS DO FORM NO BANCO
    $insert1->bindValue(':nome', $nome); // input
    $insert1->bindValue(':cpf', $cpf);
    $insert1->bindValue(':mail',$mail);
    $insert1->bindValue(':tel',$tel);
    $insert1->bindValue(':senha',$senha);
    $insert1->bindValue(':esporte',$esporte);
    
    // EXECUTA O O INSERT APLICANDO AO COMANDO QUERY1
    $insert1->execute();

    