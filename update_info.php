<?php
session_start();

$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "formulario_hebert";

$conn = new mysqli($servername, $db_username, $password, $dbname);

$username = $_SESSION['username'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$url_img = $_FILES['url_img']['name'];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["url_img"]["name"]);
move_uploaded_file($_FILES["url_img"]["tmp_name"], $target_file);

$sql = "UPDATE users SET name='$name', bio='$bio', phone='$phone', email='$email', url_img='$url_img' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    header("Location: personal_info.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


