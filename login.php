<?php
require_once 'head.php';
require_once '_login.php';?>
<br><br><br><br>

    <!-- LOGIN -->
    <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    
    <!-- EMAIL -->
    <label >Email: </label>
    <br>
    <input type="text" name="l_mail" id="mail">
    <br>
    
    <!-- SENHA -->
    <label >Senha: </label>
    <br>
    <input type="password" name="l_senha" id="senha">
    
    <!-- ENVIAR -->
    <input type="submit" value="Cadastrar">
</form>
<?php
require_once 'footer.php';
