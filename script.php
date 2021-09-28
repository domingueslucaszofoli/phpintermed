<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome nao pode ser vazio';
    return;
}

if (strlen($nome)<3)
{
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if (strlen($nome) > 40)
{
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
     echo 'Informe um numero para idade';
    return;
}

if($idade >=6 && $idade <=12)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='infantil')
            echo " O nadador " .$nome . " compete na categoria infantil";
    }
}
else if ($idade >=13 && $idade <= 18)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='adolescente')
            echo " O nadador " .$nome . " compete na categoria adolescente";
    }
}
else if ($idade >18 && $idade < 65)
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='adulto')
            echo " O nadador " .$nome . " compete na categoria adulto";
    }
}
else
{
    for($i=0;$i<= count($categorias);$i++)
    {
        if($categorias[$i]=='idoso')
            echo "O nadador " .$nome . " compete na categoria idoso";
    }
}
