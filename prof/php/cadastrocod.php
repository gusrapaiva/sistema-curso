<link rel="stylesheet" href="../../css/style.css"/>

<header>
    <h1>BigLans</h1>
</header>

<?php 

    $host = "localhost:3306";
    $user = "root";
    $pas = "";
    $base = "biglans";

    $con = mysqli_connect($host, $user, $pas, $base);

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $codcur = $_POST['codcur'];


    $cpfcheck = mysqli_query($con, "SELECT cpf FROM aluno WHERE cpf = $cpf");
    $cpfres = mysqli_fetch_array($cpfcheck);
    $cpfconstraint;

    if(isset($cpfres[0]))
    {
        $cpfconstraint = true;
        echo "<h3>Erro!</h3> <br>";
        echo "<h4>Cpf já cadastrado</h4>";
    }
    else{
        $cpfconstraint = false;
    }



    
    if($nome != "" && $cpf != "" && $email != "" && $codcur != "" && $cpfconstraint == false)
    {
        $res = mysqli_query($con, "INSERT INTO aluno (nome, cpf, email, fk_cursoId) VALUES ('$nome', '$cpf', '$email', '$codcur')");

        $idrequest = mysqli_query($con, "SELECT alunoId FROM aluno WHERE cpf = '$cpf'");
        $id = mysqli_fetch_array($idrequest);
    
        echo "<h4>Cadastro realizado com sucesso!</h4>";
        echo "<h4>O ID do aluno é: ".$id['alunoId']."</h4>"; 
    }

    

    mysqli_close($con);
?>

<a href="../cadastro.php"><h4>Voltar</h4></a>


<!-- <script>

    let pag = "../cadastro.php";

    function redirecionar ()
    {
        window.location.href = pag;
    }

    onload (redirecionar())

</script> -->