<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, preencher novamente';
    header('location: index.php');
    return;
}

else if (strlen($nome)<3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome precisa ter no mínimo 3 letras, preencher novamente';
    header('location: index.php');
    return;
}

else if (strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome precisa ter no maximo 39 letras, preencher novamente';
    header('location: index.php');
    return;
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'A idade tem de ser um número';
    header('location: index.php');
    return;
}

if($idade >=6 && $idade <=12)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='infantil') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria $categorias[$i]";
            header('location: index.php');
            return;
        }
    }
}
else if ($idade >=13 && $idade <= 18)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='adolescente') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria $categorias[$i]";
            header('location: index.php');
            return;
        }
    }
}
else if ($idade >18 && $idade < 65)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='adulto') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria $categorias[$i]";
            header('location: index.php');
            return;
        }
    }
}
else
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='idoso') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . " compete na categoria $categorias[$i]";
            header('location: index.php');
            return;
        }
    }
}
