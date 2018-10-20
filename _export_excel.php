<?php
// CABEÇARIO
require_once 'head.php';

// MOSTRAR TODOS 

// CONEXÃO
require_once '_init.php';
$cx = db_connect();
// QUERY freepass
$query2 = "SELECT id,nome,cpf,mail,tel,esporte FROM freepass";
$stmt2 = $cx->prepare($query2);
$stmt2->execute();


$html = "<h2>Solicitações frepass</h2>
 
 
<table width='50%' border='1'>
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
           </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
";

// Configurações header para forçar o download
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate");
header ("Pragma: no-cache");
header ("Content-type: application/x-msexcel");
header ("Content-Disposition: attachment; filename=\"nome_arquivo.xls\"" );
header ("Content-Description: PHP Generated Data" );

echo $html;
