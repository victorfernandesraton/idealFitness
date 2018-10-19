<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Área do Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="styleAreaDoAluno.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../responsive.css">
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top mb-5">
            <div class="container">
                <a class="navbar-brand textoNav textoBrand" href="#"><span class="logo">I</span>deal<span class="logo"> F</span>itness</a>
                <button class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="../index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="#areaAluno">Área do Aluno</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="#horarios">Horários</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="#unidades">Unidades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="#sobre">Sobre</a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>
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
        <section id="footer">
            <div class="col-sm-10 col-lg-6 container">
                <div class="row ml-3">
                    <ul class="mt-4 col-6 footerUnidades">
                        <li id="footerListHead">Unidades</li>
                        <a href=""><li class="ml-2 text-light">Brotas</li></a> 
                        <a href=""><li class="ml-2 text-light">Pituba</li></a> 
                        <a href=""><li class="ml-2 text-light">Imbui</li></a> 
                        <a href=""><li class="ml-2 text-light">Stiep</li></a> 
                        <a href=""><li class="ml-2 text-light">Cajazeiras</li></a> 
                    </ul>
                        <div class="mt-4 col-6 container-fluid">
                            <a href=""><h3 class="itemFooter">Área do Aluno</h3></a>
                            <a href=""><h3 class="itemFooter mt-5">Freepass</h3></a>
                        </div>
                </div>
                <div class="row float-right itemFooter mr-5 mr-lg-0 mr-xl-5 mt-2">
                    <a href=""><img class="mb-5" src="instagram.png" alt="Icone Instagram"></a>
                    <a href=""><img class="mb-5 ml-4" src="facebook.png" alt="Icone Facebook"></a>
                    <h3 class="col-4 col-sm-2 offset-sm-0">Telefone: <br> <span class="numTel ml-1 text-light">(12)3456789</span></h3>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>