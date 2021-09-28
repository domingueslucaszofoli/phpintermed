<?php
    session_start();
    ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content="">
    <meta nome="description" content="">
    <meta nome="viewport" content ="width-device-widht, initial-scale=1">
</head>

<body>

<p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action ="script.php" method="post">
    <?php
        $mensagemDeSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <Input type="text" name="nome"</p>
    <p>Sua idade: <Input type="text" name="idade"></p>
    <p><input type="submit"  value="Enviar dados do competidor"</p>
</form>

</body>

</html>