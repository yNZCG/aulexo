<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit;
}

include 'header.php';
?>

<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>

<a href="produtos.php">Ver produtos</a><br>
<a href="inserir.php">Cadastrar produto</a><br>
<a href="logout.php">Sair</a>