<?php
session_start();

if (isset($_POST['avatarId'])) {
  $avatarId = $_POST['avatarId'];
  $email = $_SESSION['email'];
  $url_img = "./avatars/avatar" . $avatarId . ".png";

  $servername = "localhost";
  $db_username = "root";
  $password = "";
  $dbname = "formulario_hebert";

  $conn = new mysqli($servername, $db_username, $password, $dbname);

  $sql = "UPDATE users SET url_img = ? WHERE email = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $url_img, $email);
  $stmt->execute();

  $stmt->close();
  $conn->close();
}
?>
