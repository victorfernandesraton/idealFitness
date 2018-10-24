<?php
// CONEXÃO
require_once '../arquivosRequire/_init.php';
$cx = db_connect();

// QUERY freepass
$query = "SELECT id,nome,cpf,mail,tel,esporte FROM freepass";
$stmt = $cx->prepare($query);
$stmt->execute();
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
         <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
         <tr>
            
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['nome']; ?></td>
            <td><?php echo $user['cpf']; ?></td>
            <td><?php echo $user['mail']; ?></td>
            <td><?php echo $user['tel']; ?></td>
            <td><?php echo $user['esporte']; ?></td>
            
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