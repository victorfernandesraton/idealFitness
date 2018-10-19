<?php
// CABEÇARIO
require_once 'head.php';

// MOSTRAR TODOS 

// CONEXÃO
require_once '_init.php';
$cx = db_connect();

// QUERY ALUNOS
$query1 = "SELECT id,nome,cpf,mail,tel FROM aluno";
$stmt1 = $cx->prepare($query1);
$stmt1->execute();

// QUERY ALUNOS
$query2 = "SELECT id,nome,cpf,mail,tel,esporte FROM freepass";
$stmt2 = $cx->prepare($query2);
$stmt2->execute();

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de Cadastro - IDEALFITNESS</title>
    </head>
 
    <body>
         
        <h1>LISTA DE USUÁRIOS -IDEALFITNESS</h1>
         
        <p><a href="form1.php">Adicionar Aluno</a></p>
        <p><a href="form2.php">Solicitar freepass</a></p>
 
        <h2>Lista de Alunos</h2>
 
 
 <table width="50%" border="1">
     <thead>
         <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>CPF</th>
             <th>Email</th>
             <th>TEL</th>
             <th>EDITAR</th>
             </tr>
     </thead>
     <tbody>
         <?php while ($user1 = $stmt1->fetch(PDO::FETCH_ASSOC)): ?>
         <tr>
            
            <td><?php echo $user1['id']; ?></td>
            <td><?php echo $user1['nome'] ?></td>
            <td><?php echo $user1['cpf'] ?></td>
            <td><?php echo $user1['mail'] ?></td>
            <td><?php echo $user1['tel'] ?></td>
            <td>
            <a href="delete_alunos.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
            <br><a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar (NÃO CLIQUE)</a>
            </td>
         </tr>
         <?php endwhile; ?>
     </tbody>
 </table>

<h2>Solicitações frepass</h2>
 
 
 <table width="50%" border="1">
     <thead>
         <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>CPF</th>
             <th>Email</th>
             <th>TEL</th>
             <th>Esporte</th>
             <th>EDITAR</th>
             </tr>
     </thead>
     <tbody>
         <?php while ($user2 = $stmt2->fetch(PDO::FETCH_ASSOC)): ?>
         <tr>
            
            <td><?php echo $user2['id']; ?></td>
            <td><?php echo $user2['nome'] ?></td>
            <td><?php echo $user2['cpf'] ?></td>
            <td><?php echo $user2['mail'] ?></td>
            <td><?php echo $user2['tel'] ?></td>
            <td><?php echo $user2['esporte'] ?></td>
            <td>
            <a href="delete_alunos.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');">Remover</a>
            <br><a href="form-edit.php?id=<?php echo $user['id'] ?>">Editar (NÃO CLIQUE)</a>
            </td>
         </tr>
         <?php endwhile; ?>
     </tbody>
 </table>
