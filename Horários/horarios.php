<?php
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Horários</title>
    <link rel="stylesheet" href="../CSS/styleHorarios.css">
    <?php require '../arquivosRequire/header.php'?>
</head>
<body>
<?php require '../arquivosRequire/navbar.php'?>
    <section class="horarios">
    </section>
    <section id="horarios">
        <div class="container tabelaResponsiva table-responsive-md">
            <table class="table table-bordered text-center tabelaHorarios no-shadow">
                <thead class="btnLaranja laranjaModificado">
                    <tr>
                    <th scope="col">Horários</th>
                    <th scope="col">Segunda</th>
                    <th scope="col">Terça</th>
                    <th scope="col">Quarta</th>
                    <th scope="col">Quinta</th>
                    <th scope="col">Sexta</th>
                    <th scope="col">Sábado</th>
                    </tr>
                </thead>
                <tbody class="tabelaFundo font-weight-bold">
                    <tr>
                    <th scope="row" class="btnLaranja laranjaModificado">19:00</th>
                    <td>Crossfit</td>
                    <td></td>
                    <td></td>
                    <td>Crossfit</td>
                    <td>Jump</td>
                    <td></td>
                    </tr>
                    <tr>
                    <th scope="row" class="btnLaranja laranjaModificado">22:00</th>
                    <td></td>
                    <td>Dança</td>
                    <td>Dança</td>
                    <td></td>
                    <td>Jump</td>
                    <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br><br><br><br><br>
        <div class="d-flex justify-content-center horarioFunContainer row container no-shadow">
            <div class="ml-5 ml-md-0 mr-md-5 col-10 col-md-10 col-lg-5 horarioFun btnLaranja p-4">
                <h2 class="font-weight-bold mt-2"><span class="textoHorFun">Horário de Funcionamento</span></h2>
                <h3 class="font-weight-bold">Seg. à Sex: <span class="font-weight-bold ml-5 horas text-white">5:30 - 22:00</span></h3>
                <h3 class="font-weight-bold">Sábados: &nbsp&nbsp <span class="font-weight-bold ml-5 horas text-white">5:30 - 14:00</span></h3>
            </div>
        </div>
    </section>
    <?php require '../arquivosRequire/footer.php'?>
    <script>
        document.getElementById("scrollSpyHorarios").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpyHorarios").style.color = "#313131";
        document.getElementById("spanHorarios").style.textShadow = "none";
    </script>
</body>
</html>