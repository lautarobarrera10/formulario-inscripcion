<?php 

// include("condb.php");

session_start();

$status = '';

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'POST') {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $category = $_POST["category"];

    // Si alguno de estos campos está vacío
    if(!$name || !$email) {
        $status = 'incomplete';
    }

    // Validamos que el nombre solo sea texto
    else if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
        $status = 'name-number';
    }

    // Verificamos que el email sea un email válido
    else if(!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        $status = 'email-error';
    }

    // Verificamos que se haya seleccionado una categoría
    else if($category === 'category') {
        $status = 'no-category';
    }

    else {
        $consulta = "INSERT INTO `corredores`(`name`, `email`, `category`) VALUES ('$name', '$email', '$category')";
        $result = mysqli_query($connect, $consulta);
        
        if($result){
            $status = 'success';
        } else {
            $status = 'error';
        }
    }

    $_SESSION['status'] = $status;
    $_SESSION['enviado'] = true;

    header('Location: index.php', true, 303);
    exit;
}

else if ($request_method === 'GET') {
    if (isset($_SESSION['status'])) {
        $status = $_SESSION['status'];
        unset($_SESSION['status']);
    }
    if (isset($_SESSION['enviado'])) {
        $enviado = $_SESSION['enviado'];
        var_dump($enviado);
        unset($_SESSION['enviado']);
    }
}