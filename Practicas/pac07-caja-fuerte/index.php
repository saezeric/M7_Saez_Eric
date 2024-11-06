<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sombrero Seleccionador de Hogwarts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-4">Benvinguts a Hogwarts</h1>

        <!-- Formulario para introducir nombre y apellidos -->
        <form action="bienvenida.php" method="POST" class="w-50 mx-auto">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Cognoms:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Ser seleccionat</button>
        </form>
    </div>
</body>

</html>