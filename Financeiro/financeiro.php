<?php
session_start();
$_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Financeiro</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleFinanceiro.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php'?>
    <section class="financeiro">
        <div class="container col-11 col-sm-8 col-lg-6 col-xl-4 btnLaranja quadro1 pb-4 pt-4">
            <h1 class="text-white text-center mb-4">Login</h1>
            <form action="../InSQL/_login.php" method="POST">
                <input required type="text" name="l_matricula" placeholder="Matricula" class="yes-shadow col-8 offset-2 mb-2 form-control">
                <input required type="password" name="senha" placeholder="Senha" class="yes-shadow col-8 offset-2 mb-2 form-control">
                <input type="submit" class="yes-shadow col-3 offset-4 font-weight-bold btn btn-dark btnEntrar mt-2" value="Entrar">
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