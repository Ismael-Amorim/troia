<?php

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tróia Academia</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="logo">
        <img src="logo.png" alt="logo">
    </div>
    <div class="login">
    <form id="login-usuario">
    <div id="opcoes">
        <div class="msgAlertErroLogin">
        <span id="msgAlertErroLogin" style="text-align: center !important; color:#fff;"></span>
        </div>
        <input for="cpf" id="cpf" name="cpf" type="text" placeholder="Digite seu CPF"><br />
        <input for="senha" id="senha" name="senha" type="password" placeholder="Digite sua senha"><br />
        <input type="submit" value="Entrar" class="full-rounded" id="entrar">
    </div>
    </form>
    </div>

    <script src="js/custom.js"> </script>
</body>

</html>