<?php
// CABEÇARIO
require_once 'head.php';

// VALIDADOR
require_once '_valid1.php';
?>
<!-- FORMULARIO -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <a href='index.php'>Menu principal</a> <br>
    <h2>Cadastro de Usuário</h2>
    
    <!-- NOME -->
    <label>Nome: </label>
    <br>
    <input type="text" name="nome" id="nome">
    <?php echo ($nome_Error);?>
    <br><br>
        
    <!-- CPF     -->
    <label>CPF: </label>
    <br>
    <input type="text" name="cpf" id="cpf">
    <span><?php echo($cpf_Error);?></span>
    <br>

        <!-- CONFIRM -->
        <label>Confirmar CPF: </label>
        <br>
        <input type="text" name="cpf_verify" id="cpf">
        <?php echo($V_cpf);?>
        <br>

    <br>
 
    <!-- EMAIL -->
    <label >Email: </label>
    <br>
    <input type="text" name="mail" id="mail">
    <span><?php echo($mail_Error);?></span>
    <br>
        
        <!-- CONFIRM -->
        <label>Confirmar EMAIL: </label>
        <br>
        <input type="text" name="mail_verify" id="mail">
        <?php echo($V_mail);?>
        <br>


    <br>

    <!-- TEL -->
    <label >Telefone: </label>
    <br>
    <input type="text" name="tel" id="tel">
    <span><?php echo($tel_Error);?></span>

    <br>

    <!-- SENHA -->
    <label >Senha: </label>
    <br>
    <input type="password" name="senha" id="senha">
    <span><?php echo($senha_Error);?></span>
    <br>
        
        <!-- CONFIRM -->
        <label>Confirmar senha: </label>
        <br>
        <input type="password" name="senha_verify" id="senha">
        <?php echo($V_senha);?>
        <br>


    <br>
    
    <!-- ENVIAR -->
    <input type="submit" value="Cadastrar">

</form>
<?php
// RODAPE
require_once 'footer.php';
