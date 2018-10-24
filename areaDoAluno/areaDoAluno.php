<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Área do Aluno</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleAreaDoAluno.css">
</head>
<body>
<?php require '../arquivosRequire/navbar.php'?>
    <section id="area-do-aluno">
        <div class="card-deck mt-5 ml-sm-5">
            <div class="mt-5 col-12 col-md-4">
                <a href="/idealFitness/CadastroNovoAluno/cadastroNovoAluno.php"><div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="../Imagens/IconeNovo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center text-dark textCard">Novo Aluno</p>
                    </div></a>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-4">
                <a href="/idealFitness/CadastroFreepass/cadastroFreepass.php"><div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="../Imagens/IconeFP.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center text-dark textCard">Freepass</p>
                    </div></a>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-4">
                <a href="/idealFitness/Financeiro/financeiro.php"><div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="../Imagens/IconeFinan.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center text-dark textCard">Financeiro</p>
                    </div></a>
                </div>
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