<?php
session_start();
$_SESSION['login'] = false;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Unidades</title>
    <link rel="stylesheet" href="../CSS/styleUnidades.css">
    <?php require '../arquivosRequire/header.php'?>
</head>
<body>
<?php require '../arquivosRequire/navbar.php'?>
    <section class="container mt-5">
        <h1 class="no-shadow text-light text-center tituloUnidades ml-sm-5">Nossas Unidades</h1>
        <div class="card-deck ml-5 row justify-content-center mt-5">
            <div class="card btnLaranja col-8 col-md-4">
                <div class="card-body">
                    <h5 class="no-shadow font-weight-bold card-title ml-5">Brotas</h5>
                    <p class="no-shadow card-text text-light ml-3">Av. Alguma coisa - Lugar Nenhum N° 300</p>
                    <a href="https://goo.gl/maps/4Tm5yEjSew12" target="_blank" class="no-shadow float-right card-link"><span class="btn text-light rounded bg-dark">Ver no Maps</span></a>
                </div>
            </div>
            <div class="card btnLaranja col-8 col-md-4">
                <div class="card-body">
                    <h5 class="no-shadow font-weight-bold card-title ml-5">Pituba</h5>
                    <p class="no-shadow card-text text-light ml-3">Av. Alguma coisa - Lugar Nenhum N° 300</p>
                    <a href="https://goo.gl/maps/cECwXiL6bVq" target="_blank" class="no-shadow float-right card-link"><span class="btn text-light rounded bg-dark">Ver no Maps</a>
                </div>
            </div>
        </div>
        <div class="card-deck ml-5 mt-5 mb-5 row">
            <div class="card btnLaranja col-8 col-sm-12">
                <div class="card-body cardsTriplo">
                    <h5 class="no-shadow cajazeiras font-weight-bold card-title">Imbuí</h5>
                    <p class="no-shadow card-text textoTriplo text-light">Av. Alguma coisa - Lugar Nenhum N° 300</p>
                    <a href="https://goo.gl/maps/Lq2a2eN8TUE2" target="_blank" class="no-shadow float-right card-link linkTriplo"><span class="btn tresBotoes text-light rounded bg-dark">Ver no Maps</a>
                </div>
            </div>
            <div class="card btnLaranja col-8 col-sm-12">
                <div class="card-body cardsTriplo">
                    <h5 class="no-shadow cajazeiras font-weight-bold card-title">Stiep</h5>
                    <p class="no-shadow card-text textoTriplo text-light">Av. Alguma coisa - Lugar Nenhum N° 300</p>
                    <a href="https://goo.gl/maps/ytSWyW64psA2" target="_blank" class="no-shadow float-right card-link linkTriplo"><span class="btn tresBotoes text-light rounded bg-dark">Ver no Maps</a>
                </div>
            </div>
            <div class="card btnLaranja col-8 col-sm-12">
                <div class="card-body cardsTriplo">
                    <h5 class="no-shadow cajazeiras font-weight-bold card-title">Cajazeiras</h5>
                    <p class="no-shadow card-text textoTriplo text-light">Av. Alguma coisa - Lugar Nenhum N° 300</p>
                    <a href="https://goo.gl/maps/dbave8oNk1S2" target="_blank" class="no-shadow float-right card-link linkTriplo"><span class="btn tresBotoes text-light rounded bg-dark">Ver no Maps</a>
                </div>
            </div>
        </div>
    </section>
    <?php require '../arquivosRequire/footer.php'?>
    <script>
        document.getElementById("scrollSpyUnidades").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpyUnidades").style.color = "#313131";
        document.getElementById("spanUnidades").style.textShadow = "none";
    </script>
</body>
</html>