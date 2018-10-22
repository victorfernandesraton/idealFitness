<?php

session_start();

// DECLARANDO TODAS AS VARIAVEIS COMO VAZUAS
$matricula = $nome = $cpf = $mail = $tel = $senha = $V_nome = $V_cpf = $V_mail = $V_senha = "";

// VARIÁVEIS DE ERRO

$var_erro="";

//IF QUE VERIFICA O CORRÊNCIA DO SEND
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
     // VERIFICAÇÃO DE INPUTS    
        
        // NOME
        if (empty($_POST['nome'])) {
            $_SESSION['E_nome'] = "Campo não preenchido";
            } else $nome = $_POST['nome'];
         
        // CPF
        if (empty($_POST['cpf'])) {
            $_SESSION['E_cpf']  = "Campo vazio";
            $var_erro = "ERRO";
        } else  $cpf = $_POST['cpf'];
        
        
        // EMAIL
        if (empty($_POST['mail'])) {
            $_SESSION['E_mail'] = "Campo vazio";
            $var_erro = "ERRO";
        } else if ($_POST['mail'] === $_POST['V_mail']) {
            $mail = $_POST['mail'];
        } else {
            $_SESSION['C_mail']= "Os valores conflitam";
            $var_erro = "ERRO";
        }

        
        // SENHA
        if (empty($_POST['senha'])) {
            $_SESSION['E_senha'] = "Campo vazio";
            $var_erro = "ERRO";
        } else if ($_POST['senha'] === $_POST['V_senha']) {
            $senha = sha1($_POST['senha']);
        } else {
            $_SESSION['C_senha']= "Os valores conflitam";
            $var_erro = "ERRO";
        }

        // TEL
        if (empty($_POST['tel'])) {
            $tel = '00000000';
        } else {
            $tel = $_POST['tel'];
        }

        

        // DETECÇÃO DE ERRO
        if ($var_erro == ""){
            require_once '../InSQL/_create1.php';
            echo "<script>alert('Usuário cadastrado com Suceso');
            location.href='../CadastroNovoAluno/cadastroNovoAluno.php';</script>";
            } else {
            echo "<script>alert('Usuário inválido. Deseja tentar novamente?');
location.href='../CadastroNovoAluno/cadastroNovoAluno.php';</script>";

            }
    }
    