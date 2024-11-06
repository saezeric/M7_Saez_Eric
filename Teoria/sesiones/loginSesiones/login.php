<?php
session_start();

//simulo bbdd con usuarios
$users = [
    [
        "username" => "user1",
        "password" => "pass1"
    ],
    [
        "username" => "user2",
        "password" => "pass2"
    ],
    [
        "username" => "user3",
        "password" => "pass3"
    ],
    [
        "username" => "user4",
        "password" => "pass4"
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //valido que no esten vacios
    var_dump($username);
    var_dump($password);

    //verifico si existe el usuario
    foreach ($users as $user) {
        if ($user['username'] == $username && $user['password'] == $password) {
            // si existe lo envio a la pagina de bienvenida pero antes guardo en la sesion el usuario
            $_SESSION['username'] = $username;

            header('Location: bienvenida.php');
            exit;
        } else {
            echo "Usuario o contraseña incorrectos";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
</head>

<body>
    <h2>Inicio de sesion</h2>
    <form action="POST">
        <label for="username">Usuario: </label>
        <input type="text" name="username" require>
        <label for="password">Contraseña: </label>
        <input type="password" name="password">

        <button type="submit">Iniciar Sesion</button>
    </form>
</body>

</html>