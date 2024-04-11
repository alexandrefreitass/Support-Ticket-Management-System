<?php

include 'db.php';

$data_hora = $_POST['data_hora'];
$numero_chamado = $_POST['numero_chamado'];
$atendente = $_POST['atendente'];
$solicitante = $_POST['solicitante'];
$local_chamado = $_POST['local_chamado'];
$motivo = $_POST['motivo'];
$reiteracoes = $_POST['reiteracoes'];

$query = "INSERT INTO CHAMADOS(data_hora, numero_chamado, atendente, solicitante, local_chamado, motivo, reiteracoes) 
VALUES('$data_hora', '$numero_chamado', '$atendente', '$solicitante', '$local_chamado', '$motivo', '$reiteracoes')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=chamados');