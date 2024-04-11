<?php 

include 'db.php';

$id_chamado = $_POST['id_chamado'];
$data_hora = $_POST['data_hora'];
$numero_chamado = $_POST['numero_chamado'];
$atendente = $_POST['atendente'];
$solicitante = $_POST['solicitante'];
$local_chamado = $_POST['local_chamado'];
$motivo = $_POST['motivo'];
$reiteracoes = $_POST['reiteracoes'];

$query = "UPDATE CHAMADOS SET data_hora='$data_hora', numero_chamado='$numero_chamado', atendente='$atendente',
    solicitante='$solicitante', local_chamado='$local_chamado', motivo='$motivo', reiteracoes='$reiteracoes' 
    WHERE id_chamado = $id_chamado";

mysqli_query($conexao, $query);

header('location:index.php?pagina=chamados');