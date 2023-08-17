<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redireciona se o usuário não estiver logado
    exit();
}
// Código para carregar informações existentes, se necessário
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Inclua o CSS para a navbar aqui -->
</head>
<body>
    <?php include 'navbar.php'; // Inclui a navbar ?>

    <h1>Edit Profile</h1>
    <form action="save_info.php" method="post">
        <label>Name:</label>
        <input type="text" name="name">
        <!-- Restante dos campos -->
        <button type="submit">Save</button>
    </form>

    <!-- Inclua o JavaScript para o modal aqui -->
</body>
</html>
