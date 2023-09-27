<link rel="stylesheet" href="../../css/style.css"/>

<header>
    <h1>BigLans</h1>
</header>

<?php 

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "biglans";

    $con = mysqli_connect($host, $user, $pass, $base);


    $id = $_GET['id'];
    $av1 = $_GET['av1'];
    $av2 = $_GET['av2'];
    $av3 = $_GET['av3'];
    $av4 = $_GET['av4'];
    $faltas = $_GET['faltas'];

    $media = (intval($av1) + intval($av2) + intval($av3) + intval($av4))/4;


    // $res = mysqli_query($con, "UPDATE aluno SET (av1, av2, av3, av4, presenca) = ('$av1', '$av2', '$av3', '$av4', '$faltas') WHERE id = '$id'");
    $res = mysqli_query($con, "UPDATE aluno SET av1 = '$av1' WHERE alunoId = '$id'");
    $res1 = mysqli_query($con, "UPDATE aluno SET av2 = '$av2' WHERE alunoId = '$id'");
    $res3 = mysqli_query($con, "UPDATE aluno SET av3 = '$av3' WHERE alunoId = '$id'");
    $res4 = mysqli_query($con, "UPDATE aluno SET av4 = '$av4' WHERE alunoId = '$id'");
    $res5 = mysqli_query($con, "UPDATE aluno SET presenca = '$faltas' WHERE alunoId = '$id'");
    $res6 = mysqli_query($con, "UPDATE aluno SET media = '$media' where alunoId = '$id'");



    echo "<h3>Dados inseridos com sucesso</h3>";


    mysqli_close($con);
?>

<a href="../inserir.php"><h4>Voltar</h4></a>


<!-- <script>

    let pag = "../inserir.php";

    function redirecionar ()
    {
        window.location.href = pag;
    }

    onload (redirecionar())

</script> -->