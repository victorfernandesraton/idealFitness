<?php
session_start();        
if ($_SESSION['login'] = false || empty($_SESSION['login'])) {
    header ('Location: ../index.php ');
    unset($_SESSION['login']);
}
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
            <h1 class="text-white text-center mb-4">Administrador</h1>
            <div class="row container">
                <span class="font-weight-bold no-shadow offset-1 col-5 text-white mt-2">Exportar planilha do Freepass para Excel: </span>
                <input type="submit" class="yes-shadow font-weight-bold offset-2 btnExcel col-3 btn btn-dark" onclick="window.location.href='./financeiro3.php'">
            </div>
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