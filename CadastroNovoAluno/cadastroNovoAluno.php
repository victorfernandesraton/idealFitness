<?php
session_start();
$_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Novo Aluno</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleCadastroNovoAluno.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php'?>
        <section class="cadastroNovoAluno">
            <h1 class="ml-5 text-white no-shadow titulo">Cadastro</h1>
            <br><br>
            <div class="container float-left ml-md-4 ml-lg-5">
                <form action="../Valida/_valid1.php" method = "POST">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input name="nome" type="text" class="yes-shadow mt-2 form-control" placeholder="Nome">
                                <?php
                                    if (!(empty($_SESSION['E_nome']))) {
                                        echo'<br>' .$_SESSION['E_nome'];
                                        unset($_SESSION['E_nome']);
                                    }                      
                                ?>
                                <input name="cpf" type="text" class="yes-shadow mt-2 form-control" placeholder="CPF">
                                <?php
                                    if (!(empty($_SESSION['E_cpf']))) {
                                        echo'<br>' .$_SESSION['E_cpf'];
                                        unset($_SESSION['E_cpf']);
                                }                      
                                ?>
                                <input name="mail" type="email" class="yes-shadow mt-2 form-control" placeholder="Email">
                                <?php
                                    if (!(empty($_SESSION['E_mail']))) {
                                        echo'<br>' .$_SESSION['E_mail'];
                                        unset($_SESSION['E_mail']);
                                    }                      
                                ?>
                                <input name="V_mail" type="email" class="yes-shadow mt-2 form-control" placeholder="Confirme seu email">
                                <?php
                                    if (!(empty($_SESSION['C_mail']))) {
                                        echo'<br>' .$_SESSION['C_mail'];
                                        unset($_SESSION['C_mail']);
                                    }                      
                                ?>
                                <input type="text" name = "tel" class="yes-shadow mt-2 form-control" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <input name="senha" type="password" class="yes-shadow mt-2 form-control" placeholder="Senha">
                            <?php
                                if (!(empty($_SESSION['E_senha']))) {
                                    echo'<br>' .$_SESSION['E_senha'];
                                    unset($_SESSION['E_senha']);
                                }                      
                            ?>
                            <input  name="V_senha"type="password" class="yes-shadow mt-2 form-control" placeholder="Confirme a senha">
                            <?php
                                if (!(empty($_SESSION['C_senha']))) {
                                    echo'<br>' .$_SESSION['C_senha'];
                                    unset($_SESSION['C_senha']);
                                }                      
                            ?>
                            <input type="submit" class="yes-shadow btn btnLaranja mt-2 btnEnviar float-right" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php require '../arquivosRequire/footer.php'?>
    <script>
        document.getElementById("scrollSpyAluno").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpyAluno").style.color = "#313131";
        document.getElementById("spanAluno").style.textShadow = "none";
    </script>
</body>
</html>