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
            $_SESSION['E_nome'] = "<p class='text-white no-shadow'>Campo não preenchido</p>";
            $var_erro = "ERRO";    
        } else if (  preg_match('/^[a-z\d_]{4,28}$/i', $_POST['nome'])) {
             $nome = $_POST['nome'];
            } else {
                $_SESSION['E_nome'] = "<p class='text-white no-shadow'>Caracteres Inválidos</p>";
                $var_erro = "ERRO";
        }
    
    
         
        // CPF
        if (empty($_POST['cpf'])) {
            $_SESSION['E_cpf']  = "<p class='text-white no-shadow'>Campo vazio</p>";
            $var_erro = "ERRO";
        } else if (preg_match('/^[0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}$/i',$_POST['nome']))
        {
        $cpf = $_POST['cpf'];
        } else {
            $_SESSION['E_cpf'] = "<p class='text-white no-shadow'>Caracteres Inválidos</p>";
        }

        
        // EMAIL
        if (empty($_POST['mail'])) {
            $_SESSION['E_mail'] = "<p class='text-white no-shadow'>Campo vazio</p>";
            $var_erro = "ERRO";
        } else if ($_POST['mail'] === $_POST['V_mail'] || preg_match(
            '/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
            $_POST['mail'])) {
            $mail = $_POST['mail'];
        } else {
            $_SESSION['C_mail']= "<p class='text-white no-shadow'>Os valores conflitam</p>";
            $var_erro = "ERRO";
        }

        // ESPORTE
        if (!($_POST['esporte'] == 'n_selec') || empty($_POST['esporte'])) {
            $esporte = $_POST['esporte'];
        } else {
            $_SESSION['esporte'] = "<p class='text-white no-shadow'>Selecione uma modalidade</p>";
            $var_erro = "ERRO";
        }


        // TEL
        if (empty($_POST['tel']) || preg_match(
            '/^[^0-9]$/',
            $_POST['tel'])) {
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