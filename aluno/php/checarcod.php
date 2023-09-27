<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }
    </style>
    <link rel="stylesheet" href="../../css/style.css"/>
</head>
<body>
    
<header>
    <h1>BigLans</h1>
</header>

<?php

    $host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "biglans";

    $con = mysqli_connect($host, $user, $pas, $base);

    $cpf = $_GET['cpf'];

    $res = mysqli_query($con, "SELECT nome, alunoId FROM aluno WHERE cpf = '$cpf'");

    $nomeid = mysqli_fetch_array($res);

    if($nomeid[0] == null || $nomeid[1] == null)
    {
        echo "<h2>Cadastro inválido</h2>";
    }
    else
    {
        echo "<h2>O id do Aluno ".$nomeid['nome']." é: ".$nomeid['alunoId']."</h2>";
    }
    
    
    mysqli_close($con);

?>

<a href="../checar.php">
    <h3>Voltar</h3>
</a>