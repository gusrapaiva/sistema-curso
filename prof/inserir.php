<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biglans</title>
    <style>
        body{
            text-align:center;
        }
        h1{
            margin-bottom: 50px;
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
    <h1>Inserir Notas</h1>
<hr>
</div>


<div class="form">
    <form method="get" action="php/inserircod.php">
        <h4>ID do Aluno</h4>
        <input type="text" name="id" required>
        <br><br>
        <h4>Avaliação 1 e 2</h4>
        <input type="text" name="av1" placeholder="Nota 1" required>
        <input type="text" name="av2" placeholder="Nota 2" required>
        <br><br>
        <h4>Avaliação 3 e 4</h4>
        <input type="text" name="av3" placeholder="Nota 3" required>
        <input type="text" name="av4" placeholder="Nota 4" required>
        <br><br>
        <h4>Faltas</h4>
        <input type="text" name="faltas">
        <br><br>
        <button>Inserir</button>
</form>
</div>

<br>

<a href="prof.php"><h4>Voltar ao Menu</h4></a>
    
</body>
</html>