<?php
// CONEXÃO
require_once '_init.php';
$cx = db_connect();

// QUERY freepass
$query2 = "SELECT id,nome,cpf,mail,tel,esporte FROM freepass";
$stmt2 = $cx->prepare($query2);
$stmt2->execute();
?>
 
 <!-- TABELAA A SER IMPRESSA -->
 <table width="50%" border="1">
     <thead>
         <tr>
             <th>ID</th>
             <th>Nome</th>
             <th>CPF</th>
             <th>Email</th>
             <th>TEL</th>
             <th>Esporte</th>
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
            
            </td>
         </tr>
         <?php endwhile; ?>
     </tbody>
 </table>
 <br>

<?php
//INICIALIZANDO A FUNÇÃO DE IMPRESSÃO
$file = 'freepass.xls';
toxls($file);
?>