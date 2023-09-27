<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigLans</title>
    <style>
        body{
            text-align: center;
        }
        .tabela{
            display: flex;
            justify-content: center;
        }
    </style>
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    
<header>
    <h1>BigLans</h1>
</header>

<div class="titulo">
<hr>
    <h1>Lista de Alunos</h1>
<hr>
</div>



<table><tr></tr></table>

<?php 

    $host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "biglans";

    $con = mysqli_connect($host, $user, $pas, $base);

    $tabela = mysqli_query($con, "SELECT alunoId, nome, fk_cursoid, email FROM aluno");
    

    
    
    echo "<div class='tabela'><table> <tr><th>ID</th> <th>Nome</th> <th>E-mail</th> <th>Curso</th> </tr>" ;

    while($escrever = mysqli_fetch_array($tabela))
    {
        $escrever['fk_cursoid'] == 123? $escrever['fk_cursoid'] = "Linux Experts": $escrever['fk_cursoid']; 

        echo "<tr><td>".$escrever['alunoId']."</td><td>".$escrever['nome']."</td><td>".$escrever['email']."</td><td>".$escrever['fk_cursoid']."</td></tr>";
    }

    echo "</table></div>";

    mysqli_close($con);

?>

<br><br>

<a href="prof.php">
    <h4>Voltar</h4>
</a>

</body>
</html>