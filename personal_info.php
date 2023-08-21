<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/d7477d78b2.js" crossorigin="anonymous"></script>
    <title>Informações Pessoais</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap');


        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Noto Sans', sans-serif;
        }

        .container-box {
            width: 940px;
            border: 1px solid #E0E0E0;
            border-radius: 10px;
            box-sizing: border-box;

        }

        .container-box p {
            font-size: 13px;
            font-weight: 500;
            color: #828282;

        }

        .personal-box {
            border-bottom: 1px solid #E0E0E0;
            padding: 10px;
            margin: 0;

        }

        .text-top {
            margin-left: 50px;
        }

        .personal-box label {
            width: 20%;
            font-size: 13px;
            color: #BDBDBD;
            text-transform: uppercase;
            margin-left: 50px;

        }

        .personal-box span {
            width: 80%;

        }

        .personal-box span p {
            width: 80%;
            font-size: 18px;
            color: #333333;
            font-weight: 600;
        }

        .line-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title-personal {
            font-weight: bold;
        }

        .image-container {
            width: 80%;
            position: relative;
            display: inline-block;
        }

        .image-container img {
            width: 100px;
            border-radius: 5px;

        }

        .image-container .camera-icon {
            position: absolute;
            top: 0;
            right: 0;
            color: #ffffff;
        }

        /* Para tablets (tamanho da tela abaixo de 768px) */
        @media screen and (max-width: 768px) {
            .container-box {
                width: 90%;
            }

            .personal-box label,
            .personal-box span p {
                font-size: 16px;
            }

            /* Outros ajustes específicos para tablets aqui */
        }

        /* Para celulares (tamanho da tela abaixo de 480px) */
        @media screen and (max-width: 480px) {
            .container-box {
                width: 100%;
                padding: 5px;
            }

            .personal-box label,
            .personal-box span p {
                font-size: 14px;
            }

            .text-top,
            .personal-box label {
                margin-left: 20px;
            }

            /* Outros ajustes específicos para celulares aqui */
        }
    </style>
</head>

<body>

    <?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }

    $email = $_SESSION['email'];

    $servername = "localhost";
    $db_username = "root";
    $password = "";
    $dbname = "formulario_hebert";

    $conn = new mysqli($servername, $db_username, $password, $dbname);

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user_info = $result->fetch_assoc();

    $image_url = !empty($user_info['url_img']) ? $user_info['url_img'] : './imagem/default_avatar.png';
    ?>

    <?php include 'navbar.php';
    ?>


    <h1>Personal info</h1>
    <p>Basic info, like your name and photo</p>
    <main class="container-box">
        <div class="personal-box title-personal line-box">
            <div>
                <h3 class="text-top">Profile</h3>
                <p class="text-top">Some info may be visible to other people</p>
            </div>
            <div>
                <a href="edit_info.php">Edit</a>
            </div>
        </div>

        <div class="personal-box line-box">
            <label>Photo</label>
            <div class="image-container">
                <div class="image-box">
                    <i class="fa-solid fa-camera camera-icon"></i>
                    <img src="<?= $image_url ?>" alt="Imagem de Perfil">
                </div>
            </div>
        </div>
        <div class="personal-box line-box">
            <label>Name</label>
            <span>
                <p><?php echo $row['name']; ?></p>
            </span>
        </div>
        <div class="personal-box line-box">
            <label>Bio</label>
            <span>
                <p><?php echo $row['bio']; ?></p>
            </span>
        </div>
        <div class="personal-box line-box">
            <label>Phone</label>
            <span>
                <p><?php echo $row['phone']; ?></p>
            </span>
        </div>
        <div class="personal-box line-box">
            <label>Email</label>
            <span>
                <p><?php echo $row['email']; ?></p>
            </span>
        </div>
        <div class="personal-box line-box">
            <label>Password</label>
            <span>
                <p>*********************</p>
            </span>
        </div>
    </main>



</body>

</html>