<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM usuario WHERE username='$user' AND password='$pass'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) > 0) {
        $_SESSION['usuario'] = $user;
        header("Location: home.php");
    } else {
        echo "Login inválido";
    }
}
?>

<form method="POST">
    Usuário: <input type="text" name="username"><br>
    Senha: <input type="password" name="password"><br>
    <button type="submit">Entrar</button>
</form>