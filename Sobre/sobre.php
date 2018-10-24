<?php
session_start();
$_SESSION['login'] = false;
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sobre</title>
    <?php require '../arquivosRequire/header.php' ?>
    <link rel="stylesheet" href="../CSS/styleSobre.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php' ?>
        <section class="sobre">
            <div class="ml-4 row container-fluid align-items-center background">
                <img class="murilo col-12 col-lg-6 p-5" src="/idealFitness/Imagens/murilo.jpeg" alt="Murilo">
                <p class="no-shadow mt-lg-3 textoMurilo col-12 col-lg-6 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis magna tellus, varius vitae venenatis quis, placerat a nisl. 
                    Sed nec aliquam eros. Suspendisse eget tempus ante, lobortis viverra urna. 
                    Suspendisse quam enim, ornare in justo at, porta malesuada quam. 
                    Donec eget mi enim. Cras sed vulputate dui, eu dignissim libero. 
                    Ut convallis nec lorem eu vestibulum. Aenean et leo nisl.
                    <br><br>
                    Sed at tortor vitae arcu egestas varius a et felis. 
                    Praesent sodales dolor nec fermentum sollicitudin. 
                    Ut faucibus facilisis suscipit. Proin scelerisque erat non accumsan vulputate. 
                    Integer vitae auctor enim, in convallis augue. 
                    Integer lobortis quam et aliquet suscipit. 
                    Nullam odio dui, mattis eget augue ut, sagittis venenatis lacus. 
                    Fusce sit amet lectus id ex condimentum fringilla. 
                    Nullam et neque sit amet mi tempus vehicula nec eget turpis.</p>
            </div>
        </section>
    <?php require '../arquivosRequire/footer.php' ?>
    <script>
        document.getElementById("scrollSpySobre").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpySobre").style.color = "#313131";
        document.getElementById("spanSobre").style.textShadow = "none";
    </script>
</body>
</html>