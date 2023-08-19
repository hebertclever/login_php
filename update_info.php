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

if ($_FILES['url_img']['size'] > 70000) {
    echo "A imagem é muito grande (limite de 70KB).";
    exit();
}

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["url_img"]["name"]);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

if ($imageFileType == "jpg" || $imageFileType == "jpeg") {
    $image = imagecreatefromjpeg($_FILES["url_img"]["tmp_name"]);
} else if ($imageFileType == "png") {
    $image = imagecreatefrompng($_FILES["url_img"]["tmp_name"]);
} else {
    echo "Formato de arquivo não suportado.";
    exit();
}

$new_width = 200;
$old_width = imagesx($image);
$old_height = imagesy($image);
$new_height = floor($old_height * ($new_width / $old_width));

$new_image = imagecreatetruecolor($new_width, $new_height);
imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

$webp_file = $target_dir . basename($_FILES["url_img"]["name"], ".$imageFileType") . ".webp";
imagewebp($new_image, $webp_file);

$url_img = $webp_file; // Use this variable in the update query

$sql = "UPDATE users SET name='$name', bio='$bio', phone='$phone', email='$email', url_img='$url_img' WHERE username='$username'";

if ($conn->query($sql) === TRUE) {
    header("Location: personal_info.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

imagedestroy($image);
imagedestroy($new_image);

$conn->close();
?>
