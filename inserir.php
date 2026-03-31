<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $query = "INSERT INTO produto (produtonome, produtopreco, produtostatus)
              VALUES ('$nome', $preco, true)";

    if (pg_query($conn, $query)) {
        echo "Produto cadastrado!";
    } else {
        echo "Erro!";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Preço: <input type="text" name="preco"><br>
    <button type="submit">Cadastrar</button>
</form>