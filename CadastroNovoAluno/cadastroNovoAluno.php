<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Novo Aluno</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleCadastroNovoAluno.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php'?>
        <section class="cadastroNovoAluno">
            <h1 class="ml-5 text-white no-shadow titulo">Cadastro</h1>
            <br><br>
            <div class="container float-left ml-md-4 ml-lg-5">
                <form action="">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="form-group">
                                <input type="text" class="mt-2 form-control" placeholder="Nome">
                                <input type="text" class="mt-2 form-control" placeholder="CPF">
                                <input type="email" class="mt-2 form-control" placeholder="Email">
                                <input type="email" class="mt-2 form-control" placeholder="Confirme seu email">
                                <input type="text" class="mt-2 form-control" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <input type="password" class="mt-2 form-control" placeholder="Senha">
                            <input type="password" class="mt-2 form-control" placeholder="Confirme a senha">
                            <input type="submit" class="btn btnLaranja mt-2 btnEnviar float-right" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php require '../arquivosRequire/footer.php'?>
</body>
</html>