<?php
session_start();
$_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Novo Aluno</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleCadastroFreepass.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php'?>
        <section class="cadastroNovoAluno">
            <h1 class="ml-5 text-white no-shadow titulo">Cadastro Freepass</h1>
            <br><br>
            <div class="container float-left ml-md-4 ml-lg-5">
                <form action="../Valida/_valid2.php" method = "POST">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" name="nome" class="yes-shadow mt-2 form-control" placeholder="Nome">
                                <?php
                                    if (!(empty($_SESSION['E_nome']))) {
                                        echo'<br>' .$_SESSION['E_nome'];
                                        unset($_SESSION['E_nome']);
                                    }                      
                                ?>
                                <input type="text" name="cpf" class="yes-shadow mt-2 form-control" placeholder="CPF">
                                <?php
                                    if (!(empty($_SESSION['E_cpf']))) {
                                        echo'<br>' .$_SESSION['E_cpf'];
                                        unset($_SESSION['E_cpf']);
                                    }                      
                                ?>
                                <input type="email" name="mail" class="yes-shadow mt-2 form-control" placeholder="Email">
                                <?php
                                    if (!(empty($_SESSION['E_mail']))) {
                                        echo'<br>' .$_SESSION['E_mail'];
                                        unset($_SESSION['E_mail']);
                                    }                      
                                ?>
                                <input type="email" name="V_mail" class="yes-shadow mt-2 form-control" placeholder="Confirme seu email">
                                <?php
                                    if (!(empty($_SESSION['C_mail']))) {
                                        echo'<br>' .$_SESSION['C_mail'];
                                        unset($_SESSION['C_mail']);
                                    }                      
                                ?>
                                <input type="text" name="telefone" class="yes-shadow mt-2 form-control" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                        <select class="yes-shadow mt-2 form-control" name="esporte">
                            <option value="0">Já praticou algum esporte?</option>
                            <option value="atletismo">Atletismo</option>
                            <option value="musculaçao">Musculação</option>
                            <option value="natação">Natação</option>
                            <option value="futebol">Futebol</option>
                            <option value="volei">Volei</option>
                            <option value="ciclismo">Ciclismo</option>
                            <option value="outro">Outro</option>
                            </select> <br />
                            <div class = "custom-control no-shadow text-white custom-checkbox">
                            <input type="checkbox" name="esporte" value="nenhum">Não sou praticante de esportes<br>
                            </div>
                            <?php
                                if (!(empty($_SESSION['C_mail']))) {
                                    echo'<br>' .$_SESSION['C_mail'];
                                    unset($_SESSION['C_mail']);
                                }                      
                            ?>
                            <input type="submit" class="btn btnLaranja yes-shadow mt-5 btnEnviar btnEnviar2 float-right" value="Enviar">
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