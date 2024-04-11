<?php 

include 'db.php';

$id_missao = $_POST['id_missao'];
$descricao_missao = $_POST['descricao_missao'];
$tecnico = $_POST['tecnico'];
$prazo_missao = $_POST['prazo_missao'];
$status_missao = $_POST['status_missao'];

$query = "UPDATE MISSOES SET descricao_missao='$descricao_missao', tecnico='$tecnico',
    prazo_missao='$prazo_missao', status_missao='$status_missao'  WHERE id_missao = $id_missao";

mysqli_query($conexao, $query);

header('location:index.php?pagina=missoes');