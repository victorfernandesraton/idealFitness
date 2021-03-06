<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ideal Fitness</title>
    <?php require 'arquivosRequire/header.php'?>
</head>
<body>
    <section id="home">
        <?php require 'arquivosRequire/navbar.php'?>
        <div id="carouselExampleControls" class="carousel slide carousel-fade mt-5" data-ride="carousel"> 
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container btnsSlider">
                        <div class="btnSlider btnLaranja btn btn-lg ml-5 no-shadow">Ganhe Massa</div><br>
                        <a href="/idealFitness/CadastroNovoAluno/cadastroNovoAluno.php"><button class="btnSlider btnLaranja btn btn-lg mt-3">Faça sua matrícula</button></a>
                    </div>
                    <img class="d-block w-100 imgSlider" src="Imagens/slide1.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <div class="container btnsSlider">
                        <div class="btnSlider btnEmagraca btnLaranja btn btn-lg ml-1 btnEmagreca no-shadow">Emagreça</div><br>
                        <a href="/idealFitness/CadastroNovoAluno/cadastroNovoAluno.php"><button class="btnSlider btnLaranja btn btn-lg mt-3">Faça sua matrícula</button></a>
                    </div>
                    <img class="d-block w-100 imgSlider" src="Imagens/slide2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <div class="container btnsSlider">
                        <div class="btnSlider btnLaranja btn btn-lg ml-5 no-shadow">Seja Saudável</div><br>
                        <a href="/idealFitness/CadastroNovoAluno/cadastroNovoAluno.php"><button class="btnSlider btnLaranja btn btn-lg mt-3">Faça sua matrícula</button></a>
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
        <div class="row col-12 col-sm-12 col-md-10 offset-md-1">
            <div class="container-fluid ml-3 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-left mt-5 mb-3">Musculação</div>
                <div class="textModalidades col-12 col-sm-9 float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
            </div>
        </div>
        <div class="row col-12 col-sm-12 col-md-10 offset-md-1">
            <div class="container-fluid ml-3 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-right mt-5 mb-3">Crossfit</div>
                <div class="textModalidades col-12 col-sm-9 float-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
            </div>
        </div>
        <div class="row col-12 col-sm-12 col-md-10 offset-md-1 mb-5">
            <div class="container-fluid ml-3 mt-5">
                <div class="btnLaranja boxModalidades text-center col-12 col-md-3 float-left mt-5 mb-3">Fitdance</div>
                <div class="textModalidades col-12 col-sm-9 float-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Fusce a sapien eu lectus laoreet dignissim convallis at est. Quisque tempus leo in mauris mattis vehicula. 
                    Morbi velit elit, viverra quis viverra sed, laoreet et mi. Aenean orci sem, aliquet sit amet turpis vel, 
                    tempor sollicitudin tellus. Aliquam consectetur lacus sed nibh pharetra.</div>
            </div>
        </div>
    </section>
    <?php require 'arquivosRequire/footer.php'?>
    <script>
        document.getElementById("scrollSpyHome").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpyHome").style.color = "#313131";
        document.getElementById("spanHome").style.textShadow = "none";
    </script>
</body>
</html>
