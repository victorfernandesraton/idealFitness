<?php

    // CRIANDO CONEXÃO
    require_once"_init.php";
    $cx = db_connect();


    // COMANDO QUERY INSERT
    $query1 = 'INSERT INTO aluno (nome,cpf,mail,tel,senha) VALUES (:nome,:cpf,:mail,:tel,:senha)';

    // COMANDO PREPARE QUE VERIFICA SE HOUVE TENTATIVA DE SQL INJECT
    $insert1 = $cx->prepare($query1);

    // INPUTS DE VARIAVEIS DO FORM NO BANCO
    $insert1->bindValue(':nome', $nome); // input
    $insert1->bindValue(':cpf', $cpf);
    $insert1->bindValue(':mail',$mail);
    $insert1->bindValue(':tel',$tel);
    $insert1->bindValue(':senha',$senha);
    
    // EXECUTA O O INSERT APLICANDO AO COMANDO QUERY1
    $insert1->execute();

    