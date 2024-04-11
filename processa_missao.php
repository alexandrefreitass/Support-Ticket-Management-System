<?php

include 'db.php';

$descricao_missao = $_POST['descricao_missao'];
$tecnico = $_POST['tecnico'];
$prazo_missao = $_POST['prazo_missao'];
$status_missao = $_POST['status_missao'];

$query = "INSERT INTO MISSOES(descricao_missao, tecnico, prazo_missao, status_missao) 
VALUES('$descricao_missao', '$tecnico', '$prazo_missao', '$status_missao')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=missoes');