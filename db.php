
<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "copom_php";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);
    $conexao->set_charset("utf8");

    $query = "SELECT * FROM MISSOES";
    $consulta_missoes = mysqli_query($conexao, $query);

    $query = "SELECT * FROM CHAMADOS";
    $consulta_chamados = mysqli_query($conexao, $query);

    $query = "SELECT * FROM INVENTARIO";
    $consulta_inventario = mysqli_query($conexao, $query);
?>


