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
    <div>
        <?php if($status === 'success'): ?>
            <div class="alert success">
                <p>¡Inscripción enviada con éxito!</p>
            </div>
        <?php endif; ?>
        <?php if($status === 'error'): ?>
            <div class="alert error">
                <p>Ha ocurrido un problema...</p>
            </div>
        <?php endif; ?>
        <?php if($status === 'incomplete'): ?>
            <div class="alert error">
                <p>Por favor, completa todos los campos...</p>
            </div>
        <?php endif; ?>
        <?php if($status === 'name-number'): ?>
            <div class="alert error">
                <p>El nombre no puede contener números o carácteres especiales.</p>
            </div>
        <?php endif; ?>
        <?php if($status === 'email-error'): ?>
            <div class="alert error">
                <p>Por favor, ingresa un email válido...</p>
            </div>
        <?php endif; ?>
    </div>
    <div class="main">
    <div class="formulario">
        <form action="./index.php" method="post">
            <h1>Formulario de inscripción</h1>
            <div>
                <label for="name">Nombre:</label>
                <input require name="name" placeholder="Nombre..." type="name">
            </div>
            <div>
                <label for="email">Email:</label>
                <input require name="email" placeholder="Email..." type="email">
            </div>
            <div>
                <input class="button" type="submit" name="register" value="Inscribirme">
            </div>
        </form>
    </div>
    </div>
</body>
</html>