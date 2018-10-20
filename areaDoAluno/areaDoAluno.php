<!DOCTYPE html>
<html>
<head>
    <title>Área do Aluno</title>
    <link rel="stylesheet" href="styleAreaDoAluno.css">
    <?php require '../header.php'?>
</head>
<body>
<?php require '../navbar.php'?>
    <section id="area-do-aluno">
        <div class="card-deck mt-5 ml-5">
            <div class="mt-5 col-12 col-md-4">
                <div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="Imagens/IconeNovo.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center textCard">Novo Aluno</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-4">
                <div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="Imagens/IconeFP.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center textCard">Freepass</p>
                    </div>
                </div>
            </div>
            <div class="mt-5 col-12 col-md-4">
                <div class="card btnLaranja no-shadow" style="width: 18rem;">
                    <img class="imagemCards card-img-top ml-1 mt-2" src="Imagens/IconeFinan.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text text-center textCard">Financeiro</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require '../footer.php'?>
</body>
</html>