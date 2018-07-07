<?php

    if(isset($_POST['email']) && empty($_POST['email']) ==false)
    
    {
        if(isset($_POST['senha']) && empty($_POST['senha']) ==false)
    {
            $email = $_POST["email"];
            $senha = $_POST["senha"]; 

            echo "Seu email de cadastro é ". $email . " e seua senha é ". $senha;
        }
       
    }

?>
<hr>




<form method="POST">

    Email:
    <input type="text" name="email"/></br></br>

    Senha:
    <input type="password" name="senha"/></br></br>

    <input type="submit" value="Enviar dados"/>

</form>