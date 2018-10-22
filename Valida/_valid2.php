<?php
session_start();
// DECLARANDO TODAS AS VARIAVEIS COMO VAZUAS

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

        // ESPORTE
        if (!($_POST['esporte'] == 'n_selec') || empty($_POST['esporte'])) {
            $esporte = $_POST['esporte'];
        } else {
            $_SESSION['esporte'] = "Selecione uma modalidade";
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
            require_once '../InSQL/_create2.php';
            echo "<script>alert('Usuário cadastrado com Suceso');
            location.href='../CadastroFreepass/cadastroFreepass.php';</script>";
            } else {
            echo "<script>alert('Usuário inválido. Deseja tentar novamente?');
            location.href='../CadastroFreepass/cadastroFreepass.php';</script>";

            }
    }
   // location.href='../CadastroFreepass/cadastroFreepass.php'    