<?php
session_start();
# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
    if(isset($_GET['pagina'])){
        $pagina = $_GET['pagina'];
    }
    else{
        $pagina = 'home';
    }

    switch($pagina){  
        case 'missoes': include 'missoes.php'; break;
        case 'chamados': include 'chamados.php'; break;
        case 'inventario': include 'inventario.php'; break;
        case 'inserir_missao': include 'inserir_missao.php'; break;
        case 'inserir_chamado': include 'inserir_chamado.php'; break;
        case 'inserir_inventario': include 'inserir_inventario.php'; break;
        case 'deleta_missao': include 'deleta_missao.php'; break;
        default: include 'home.php'; break;
    }

# Rodapé
include 'footer.php';
