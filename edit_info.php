<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario_hebert";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = $_SESSION['email'];


$sql = "SELECT email, url_img, name, bio, phone FROM users WHERE email='$email'";
$result = $conn->query($sql);


$user_info = $result->fetch_assoc();

$conn->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Editar Informações</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            font-family: Arial, sans-serif;
            max-width: 100%;
            box-sizing: border-box;
        }


        .content {
            width: 100%;
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        label,
        input {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        @media screen and (max-width: 900px) {
            .content {
                width: 80%;
            }
        }

        @media screen and (max-width: 600px) {
            .content {
                width: 100%;
                padding: 15px;
            }
        }

        a {
            color: #007bff;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .modal-avatar {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .modal-content-avatar {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fefefe;
            border: 1px solid #888;
            max-width: 700px;
            width: 80%;
        }

        .close {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>



    <div class="content">
        <p class="social-text text2"><a href="personal_info.php"> Back</a></p>
        <h1>Edit Profile</h1>
        <form action="update_info.php" method="post" enctype="multipart/form-data">
            <span>
                <img src="<?= isset($user_info['url_img']) ? $user_info['url_img'] : 'default.png' ?>" alt="Profile Image">
                <label>Photo:</label>
                <input type="file" name="url_img">
               
                <a href="javascript:void(0);" onclick="openAvatarModal()">Choose an Avatar</a>
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
        <div id="avatarModal" class="modal-avatar">
            <div class="modal-content-avatar">
                <span class="close" onclick="closeAvatarModal()">&times;</span>
                <h3>Select an Avatar:</h3>
                <div class="avatars">
                    <?php for ($i = 1; $i <= 5; $i++) : ?>
                        <img src="./avatars/avatar<?= $i ?>.png" class="avatar-option" data-avatar-id="<?= $i ?>">
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>


    <script>
        
        function openAvatarModal() {
            var modal = document.getElementById("avatarModal");
            modal.style.display = "block";
        }

        
        function closeAvatarModal() {
            var modal = document.getElementById("avatarModal");
            modal.style.display = "none";
        }

        
        window.onclick = function(event) {
            var modal = document.getElementById("avatarModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>

</html>