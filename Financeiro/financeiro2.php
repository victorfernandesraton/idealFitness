<?php
session_start();        
if (empty($_SESSION['login']) || empty($_SESSION['frist'])) {
    header ('Location: ../index.php ');
    unset($_SESSION['login']);
} else {

require_once '../arquivosRequire/_init.php';
$cx = db_connect();
$query1 = "SELECT id,nome,datav FROM aluno WHERE id = :id OR mail = :mail";
$stmt1 = $cx->prepare($query1);
$stmt1->bindValue(':id',$_SESSION['login']);
$stmt1->bindValue(':mail',$_SESSION['login']);
$stmt1->execute();
$user1 = $stmt1->fetch(PDO::FETCH_ASSOC);
// $dataBR = (string)$user['datav']->format( 'd/m/Y' );
}
?>
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
        <div class="quadro2">
            <h1 class="text-white ml-5 tituloConsulta no-shadow">Consulta Financeira</h1>
            <div class="container col-11 col-sm-8 col-lg-6 col-xl-6 btnLaranja pb-4 pt-4">
                <ul class="no-shadow">
                    <h2><li class="col-12 mb-4">Nome: <span class="ml-lg-5 text-white"><?php echo $user1['nome']; ?></span> </li></h2>
                    <h2><li class="col-12 mb-4">Matrícula: <span class="ml-lg-5 text-white"><?php echo $user1['id']?></span> </li></h2>
                    <h2><li class="col-12 mb-4">Último Lançamento: <span class="ml-lg-5 text-white"><?echo $user1['datav'];?></span> </li></h2>
                    <h2><li class="col-12 mb-4">Próximo Lançamento: <span class="ml-lg-5 text-white">dd/mm/aaaa</span> </li></h2>
                </ul>
            </div>
        </div>
    </section>
    <?php require '../arquivosRequire/footer.php'?>
    <script>
        document.getElementById("scrollSpyAluno").style.backgroundColor = "#F95A00";
        document.getElementById("scrollSpyAluno").style.color = "#313131";
        document.getElementById("spanAluno").style.textShadow = "none";
    </script>
</body>
</html>