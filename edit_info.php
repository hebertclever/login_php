<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Código para conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_hebert";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$username = $_SESSION['username'];

// Consulta para buscar informações do usuário logado
$sql = "SELECT username, email, url_img, name, bio, phone FROM users WHERE username='$username'";
$result = $conn->query($sql);

// Armazena as informações do usuário
$user_info = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Informações</title>
    <!-- Inclua o CSS para a navbar aqui -->
</head>
<body>
    <?php include 'navbar.php'; // Inclui a navbar ?>

    <h1>Edit Profile</h1>
    <form action="update_info.php" method="post" enctype="multipart/form-data">
        <span>
        <img src="<?= isset($user_info['url_img']) ? $user_info['url_img'] : 'default.png' ?>" alt="Profile Image">    
        <label>Photo:</label>
        <input type="file" name="url_img">
        </span>
       
        <label>Name:</label>
        <input type="text" name="name" value="<?= isset($user_info['name']) ? $user_info['name'] : '' ?>">
        <label>Bio:</label>
        <input type="text" name="bio" value="<?= isset($user_info['bio']) ? $user_info['bio'] : '' ?>">
        <label>Phone:</label>
        <input type="text" name="phone" value="<?= isset($user_info['phone']) ? $user_info['phone'] : '' ?>">
        <label>Email:</label>
        <input type="email" name="email" value="<?= isset($user_info['email']) ? $user_info['email'] : '' ?>">
        <input type="submit" value="Salvar">
    </form>

    <!-- Inclua o modal aqui -->
</body>
</html>
