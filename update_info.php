<?php
session_start();

$servername = "localhost";
$db_username = "root";
$password = "";
$dbname = "formulario_hebert";

$conn = new mysqli($servername, $db_username, $password, $dbname);

$email = $_SESSION['email'];
$name = $_POST['name'];
$bio = $_POST['bio'];
$phone = $_POST['phone'];


$url_img = "";


if ($_FILES['url_img']['error'] == UPLOAD_ERR_OK) {
    if ($_FILES['url_img']['size'] > 70000) {
        echo "A imagem é muito grande (limite de 70KB).";
        exit();
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["url_img"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);


    if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
        echo "Formato de arquivo não suportado.";
        exit();
    }

    
    if (!move_uploaded_file($_FILES["url_img"]["tmp_name"], $target_file)) {
        echo "Ocorreu um erro ao carregar a imagem.";
        exit();
    }

    $url_img = $target_file; 
}

$sql = "UPDATE users SET name='$name', bio='$bio', phone='$phone', url_img='$url_img' WHERE email='$email'";

if ($conn->query($sql) === TRUE) {
    header("Location: personal_info.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
