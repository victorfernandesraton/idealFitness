<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Novo Aluno</title>
    <?php require '../arquivosRequire/header.php'?>
    <link rel="stylesheet" href="../CSS/styleCadastroFreepass.css">
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
                                <input type="text" name="nome" class="yes-shadow mt-2 form-control" placeholder="Nome">
                                <input type="text" name="cpf" class="yes-shadow mt-2 form-control" placeholder="CPF">
                                <input type="email" name="email" class="yes-shadow mt-2 form-control" placeholder="Email">
                                <input type="email" name="confirmeEmail" class="yes-shadow mt-2 form-control" placeholder="Confirme seu email">
                                <input type="text" name="telefone" class="yes-shadow mt-2 form-control" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4">
                            <label class="no-shadow text-secondary font-weight-bold" for="esporte">Já praticou algum esporte?</label>
                            <input type="text" class="form-control" name="esporte" placeholder="Senha">
                            <input type="submit" class="btn btnLaranja yes-shadow mt-2 btnEnviar float-right" value="Enviar">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    <?php require '../arquivosRequire/footer.php'?>
</body>
</html>