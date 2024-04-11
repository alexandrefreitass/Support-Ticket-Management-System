<?php
session_start();
if(isset($_SESSION['login'])){

include 'db.php';

$id_missao = $_GET['id_missao'];

$query = "DELETE FROM MISSOES WHERE ID_MISSAO = $id_missao";
$query2 = "ALTER TABLE MISSOES AUTO_INCREMENT=1";
$query3 = "SET @count = 0";
$query4 = "UPDATE MISSOES SET MISSOES.ID_MISSAO = @count:= @count + 1";


mysqli_query($conexao, $query);
mysqli_query($conexao, $query2);
mysqli_query($conexao, $query3);
mysqli_query($conexao, $query4);

header('location:index.php?pagina=missoes');

}else{
    header('location:index.php?pagina=missoes');
}