<link rel="stylesheet" href="../../css/style.css"/>

<style>
    body{
        text-align: center;
    }
    .tabela{
        margin-top: 50px;
        display: flex;
        justify-content: center;
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

    $con = mysqli_connect($host, $user, $pas, $base);

    $id = $_GET['id'];

    $result = null;

    $mediapres = mysqli_query($con, "SELECT media, presenca FROM aluno WHERE alunoId = '$id' ");
    $mediapresarr = mysqli_fetch_array($mediapres);
    
    $media = $mediapresarr[0] ?? 0;

    if(isset($mediapresarr))
    {
        echo "<h2>Boletim</h2>";

        $presenca = 100-($mediapresarr[1] * 0.5);

        if($media >= 80 && $presenca >= 75)
        {
            $result = "Aprovado";
        }
        else
        {
            $result = "Reprovado";
        }
    
        $dados = mysqli_query($con, "SELECT nome, av1, av2, av3, av4, media, presenca  FROM aluno WHERE alunoId = '$id'");
        $boletim = mysqli_fetch_array($dados);
    
        echo "<div class='tabela'><table border=3px> <tr> <th>Aluno</th> <th>Av1</th> <th>Av2</th> <th>Av3</th> <th>Av4</th> <th>Média</th> <th>Presença</th> <th>Resultado</th></tr>";
        
    
        echo "<tr><td>".$boletim[0]."</td><td>".$boletim[1]."</td><td>".$boletim[2]."</td><td>".$boletim[3]."</td><td>".$boletim[4]."</td><td>".$boletim[5]."</td><td>".$presenca."%</td><td>".$result."</td></tr></table></div>";
    
    
    
        if($result == "Aprovado")
        {
            echo "<br> <h3>Clique <a href='../../img/certificado-biglans.png' id='span' target='blank_'>aqui</a> para resgatar seu certificado!</h3>";
        }
    }

    else
    {
        echo "<h3> O ID não existe </h3>";
    }

    mysqli_close($con);
?>

<a href="../boletim.php"><h4>Voltar</h4></a>