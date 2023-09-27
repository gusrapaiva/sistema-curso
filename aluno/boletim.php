<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biglans</title>
    <style>
        body{
            text-align: center;
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
<h1>Gerar Boletim</h1>
<hr>
</div>

<form method="get" action="php/boletimcod.php">
    <h4>ID do aluno:</h4>
    <input type="text" name="id" required>
    <br><br>
    <button>Gerar</button>
</form>



<br><br>

<a href="aluno.php"><h4>Voltar ao Menu</h4></a>



    
</body>
</html>