<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ideal Fitness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>
<body>
    <section id="home">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand textoNav textoBrand" href="#"><span class="logo">I</span>deal<span class="logo"> F</span>itness</a>
                <button class="navbar-toggler navbar-dark" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link textoNav" href="#">Home</a>
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
        <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container btnsSlider">
                        <div class="btnLaranja btn btn-lg ml-5 no-shadow">Ganhe Massa</div><br>
                        <button class="btnLaranja btn btn-lg mt-3">Faça sua matrícula</button>
                    </div>
                    <img class="d-block w-100 imgSlider" src="Imagens/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <div class="container btnsSlider">
                        <div class="btnEmagraca btnLaranja btn btn-lg ml-5 no-shadow">Emagreça</div><br>
                        <button class="btnLaranja btn btn-lg mt-3">Faça sua matrícula</button>
                    </div>
                    <img class="d-block w-100 imgSlider" src="Imagens/slide2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <div class="container btnsSlider">
                        <div class="btnLaranja btn btn-lg ml-5 no-shadow">Seja Saudável</div><br>
                        <button class="btnLaranja btn btn-lg mt-3">Faça sua matrícula</button>
                    </div>
                    <img class="d-block w-100 imgSlider" src="Imagens/slide3.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row col-12">
            <div class="container-fluid ml-5 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-left mt-5 mb-3">Musculação</div>
                <div class="textModalidades col-12 col-sm-9 float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
            </div>
        </div>
        <div class="row col-12">
            <div class="container-fluid ml-5 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-right mt-5 mb-3">Crossfit</div>
                <div class="textModalidades col-12 col-sm-9 float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
            </div>
        </div>
        <div class="row col-12 mb-5">
            <div class="container-fluid ml-5 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-left mt-5 mb-3">Fitdance</div>
                <div class="textModalidades col-12 col-sm-9 float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
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
                    <a href=""><img class="mb-5" src="Imagens/instagram.png" alt="Icone Instagram"></a>
                    <a href=""><img class="mb-5 ml-4" src="Imagens/facebook.png" alt="Icone Facebook"></a>
                    <h3 class="col-4 col-sm-2 offset-sm-0">Telefone: <br> <span class="numTel ml-1 text-light">(12)3456789</span></h3>
                </div>
            </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>