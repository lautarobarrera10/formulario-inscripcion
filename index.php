<?php

include('register.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscripción</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include('./components/header.php'); ?>

    <?php include('./components/main.php'); ?>

    <?php include('./components/coordinadores.php'); ?>

    <?php include('./components/modal.php'); ?>

    <script src="./src/index.js"></script>

    <? if($enviado): ?>

    <script>
        // modal.classList.add('active')
    </script>

    <? endif; ?>
</body>
</html>