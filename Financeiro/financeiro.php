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
            <form action="">
                <input type="text" name="Matricula" placeholder="Matricula" class="yes-shadow col-8 offset-2 mb-2 form-control">
                <input type="text" name="Matricula" placeholder="Senha" class="yes-shadow col-8 offset-2 mb-2 form-control">
                <input type="submit" class="yes-shadow col-3 offset-4 font-weight-bold btn btn-dark btnEntrar mt-2" value="Entrar">
            </form>
        </div>
        <div class="quadro2">
            <h1 class="text-white ml-5 tituloConsulta no-shadow">Consulta Financeira</h1>
            <div class="container col-11 col-sm-8 col-lg-6 col-xl-6 btnLaranja pb-4 pt-4">
                <ul class="no-shadow">
                    <h2><li class="col-12 mb-4">Nome: <span class="ml-lg-5 text-white">VICTOR FERNANDES BAIAO RATON</span> </li></h2>
                    <h2><li class="col-12 mb-4">Matrícula: <span class="ml-lg-5 text-white">XXXXXX-XX</span> </li></h2>
                    <h2><li class="col-12 mb-4">Último Lançamento: <span class="ml-lg-5 text-white">dd/mm/aaaa</span> </li></h2>
                    <h2><li class="col-12 mb-4">Próximo Lançamento: <span class="ml-lg-5 text-white">dd/mm/aaaa</span> </li></h2>
                </ul>
            </div>
        </div>
    </section>
    <?php require '../arquivosRequire/footer.php'?>
    <script>
            $(".btnEntrar").click(function(){
                $(".quadro1").hide();
                $(".quadro2").show();
            });
    </script>
</body>
</html>