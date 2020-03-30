
<html>
    <form action="" method="POST">
        Login: <input type="text" name="username"><br>
        Senha: <input type="password" name="senha"><br>
        <input type="submit" name="submit" value="Login">
    </form>

</html>


<?php
    $error = [];

    if(isset($_POST['submit'])){
        $login = $_POST['username'];
        $senha = $_POST['senha'];
        tratamentoLogin($login,$senha,$error);
        lerErros($error);
    }
?>




<?php
//FUNÇÕES

    // & referencia escondida estamos apontando diretamente para as variaveis nesta função
    function tratamentoLogin(&$login,&$senha,&$error){
        if( strlen($senha) == 0) { array_push($error,"O campo senha vazio!"); }
        if( strlen($login) == 0 ){ array_push($error,"O campo login vazio!"); } 
    }

    function lerErros(&$error){
        if(count($error)>0){  echo "<br>"."Falhas encontradas"."<br>";
            for($i = 0; $i<count($error);$i++){ echo "<br>".$error[$i]."<br>"; }
        }
    }

?>