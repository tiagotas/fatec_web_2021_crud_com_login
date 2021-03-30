<?php
// página restrita
session_start();

if(!isset($_SESSION['dados_usuario'])) {
    header("location: login.php");
}

if(isset($_GET['sair']))
{
    session_destroy();
    header("location: login.php");
}
?>

Bem-vindo (a) <?= $_SESSION['dados_usuario']->nome ?> | 

<a href="?sair=true">sair</a>

<hr />

<a href="cadastrar_categoria.php">Cadastrar Categoria</a>

<a href="listar_categoria.php">Listar Categoria</a>



