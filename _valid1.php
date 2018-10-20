<?php
// DECLARANDO TODAS AS VARIAVEIS COMO VAZUAS
$nome = $cpf = $mail = $tel = $senha = $V_nome = $V_cpf = $V_mail = $V_senha = "";

// VARIÁVEIS DE ERRO
$nome_Error = "*";
$cpf_Error = "*";
$mail_Error = "*";
$senha_Error ='*';
$tel_Error="";
$var_erro="";

//IF QUE VERIFICA O CORRÊNCIA DO SEND
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
     // VERIFICAÇÃO DE INPUTS    
        
        // NOME
        if (empty($_POST['nome'])) {
            $nome_Error = "Campo vazio";
            $var_erro = "ERRO";
        } else $nome = $_POST['nome'];
         
        // CPF
        if (empty($_POST['cpf'])) {
            $cpf_Error = "Campo vazio";
            $var_erro = "ERRO";
        } else if ($_POST['cpf'] === $_POST['cpf_verify']) {
            $cpf = $_POST['cpf'];
        } else {
            $V_cpf = "Os valores conflitam";
            $var_erro = "ERRO";
        }
        
        // EMAIL
        if (empty($_POST['mail'])) {
            $mail_Error = "Campo vazio";
            $var_erro = "ERRO";
        } else if ($_POST['mail'] === $_POST['mail_verify']) {
            $mail = $_POST['mail'];
        } else {
            $V_mail = "Os valores conflitam";
            $var_erro = "ERRO";
        }
        
        // SENHA
        if (empty($_POST['senha'])) {
            $senha_Error = "Campo vazio";
            $var_erro = "ERRO";
        } else if ($_POST['senha'] === $_POST['senha_verify']) {
            $senha = sha1($_POST['senha']);
        } else {
            $V_senha = "Os valores conflitam";
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
            require_once '_create1.php';
            echo "<script> alert('Usuário cadastrado'); </script>";
            } else {
            echo "<script> alert('Erro ao cadastrar'); </script>";
            }
    }
    