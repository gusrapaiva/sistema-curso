<link rel="stylesheet" href="css/style.css"/>
<style>
    h2{
        margin: 150px 0;
    }
</style>

<header>
    <h1>BigLans</h1>
</header>

<?php 

    $host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "biglans";

    $con =  mysqli_connect($host, $user, $pas, $base);

    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $usuario = $_GET['user'];

    if($usuario == "prof")
    {
        $res = mysqli_query($con, "SELECT email, senha FROM professor WHERE email = '$email'");
        $proflogin = mysqli_fetch_array($res);

        if($email == $proflogin[0] && $senha == $proflogin[1])
        {
            header("location: prof/prof.php");
        }
        else
        {
            echo "<h2>Email ou senha incorretos</h2>";
        }
    }

    if($usuario == "aluno")
    {
        $res = mysqli_query($con, "SELECT email, cpf FROM aluno WHERE email = '$email'");
        $alulogin = mysqli_fetch_array($res);

        if($email == $alulogin[0] && $senha == $alulogin[1])
        {
            header("location: aluno/aluno.php");
        }
        else
        {
            echo "<h2>Email ou senha incorretos</h2>";
        }
    }

?>

<a href="index.php">
<h4>Voltar</h4>
</a>

<footer>
    <h5>Gustavo Rodrigues de Almeida Paiva</h5>
</footer>