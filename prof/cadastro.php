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
    <h1>Cadastro de aluno</h1>
<hr>
</div>



<div class="form cada">
    <form method="post" action="php/cadastrocod.php">
        <h4>Nome:</h4>
        <input type="text" name="nome" required>
        <br><br>
        <h4>Cpf:</h4>
        <input type="text" name="cpf" required>
        <br><br>
        <h4>Email:</h4>
        <input type="text" name="email" required>
        <br><br>
        <h4>Curso:</h4>
        <select required name="codcur">
            <option selected disabled>Escolha</option>
            <option value="123">Linux Experts</option>
        </select>
        <br><br>
        <button>Cadastrar</button>
        <br>
    </form>
</div>


<br><br>

<a href="prof.php"><h4>Voltar ao Menu</h4></a>

</body>
</html>