<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biglans</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<header>
    <h1>BigLans</h1>
</header>


<div class="titulo">
<hr>
    <h1>Login</h1>
<hr>
</div>

<div class="login">

    <form method="get" action="logincod.php">

        <h4>Email:</h4>
        <input type="text" name="email" required>

        <h4>Senha:</h4>
        <input type="password" name="senha" required>

        <select name="user" required>
    text-align: left;
            <optgroup>
                <option selected disabled >Você é..</option>
                <option name="aluno" value="aluno">Aluno</option>
                <option name="prof" value="prof">Professor</option>
            </optgroup>
        </select>

        <br><br>
        <button>Entrar</button>
    </form>
</div>



<footer>
    <h5>Gustavo Rodrigues de Almeida Paiva</h5>
</footer>

</body>
</html>