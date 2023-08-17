<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_hebert";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT id FROM users WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: personal_info.php");
} else {
    echo "Usuário ou senha inválidos";
}

$conn->close();
?>
