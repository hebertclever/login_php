<!DOCTYPE html>
<html>
<head>
    <title>Informações Pessoais</title>
</head>

<body>
    
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }

    $username = $_SESSION['username'];

    $servername = "localhost";
    $db_username = "root";
    $password = "";
    $dbname = "formulario_hebert";

    $conn = new mysqli($servername, $db_username, $password, $dbname);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

<?php include 'navbar.php'; // Inclui a navbar e o modal ?>


<h1>Profile <a href="edit_info.php">Edit</a></h1>
<div>
    <label>Photo:</label>
    <img src="<?php echo $row['url_img']; ?>" alt="Imagem de Perfil">
</div>
<div>
    <label>Name:</label>
    <span><?php echo $row['name']; ?></span>
</div>
<div>
    <label>Bio:</label>
    <span><?php echo $row['bio']; ?></span>
</div>
<div>
    <label>Phone:</label>
    <span><?php echo $row['phone']; ?></span>
</div>
<div>
    <label>Email:</label>
    <span><?php echo $row['email']; ?></span>
</div>
<div>
    <label>Password:</label>
    <span>*********************</span>
</div>

<?php $conn->close(); ?>
</body>
</html>
