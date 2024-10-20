<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Frutas favoritas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<?php

   $frutas = array(

    array("Manzana","✖ No seleccionada","https://static.vecteezy.com/system/resources/previews/023/858/853/non_2x/ai-genrative-green-apple-free-png.png"),
    array("Platano","✖ No seleccionada","https://static.vecteezy.com/system/resources/previews/008/327/759/non_2x/hand-drawn-banana-free-vector.jpg"),
    array("Naranja","✖ No seleccionada","https://static.vecteezy.com/system/resources/previews/005/539/603/non_2x/orange-whole-and-slices-of-oranges-illustration-of-oranges-fully-editable-handmade-mesh-free-vector.jpg"),
    array("Fresa","✖ No seleccionada","https://static.vecteezy.com/system/resources/previews/005/634/168/non_2x/strawberry-icon-isolated-on-white-illustration-free-vector.jpg"),
    array("Kiwi","✖ No seleccionada","https://static.vecteezy.com/system/resources/previews/006/943/630/non_2x/whole-kiwi-with-green-leaf-isolated-on-white-background-flat-illustration-free-vector.jpg")

   );  

$colores = [
    "red",
    "blue",
    "green",
    "yellow",
    "orange",
    "pink"
];

if(isset($_GET['color'])){
    $color = $_GET['color'];
}

?>

<style>
    body{
        background-color: <?php echo $color?>;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
        <?php
            for($i = 0; $i < 6; $i++){
                echo '<a href="?fruta=' . $_GET['fruta'] . '&color='. $colores[$i] .'" class="p-2 mx-1 border border-dark rounded" style="background-color:'. $colores[$i] .'"></a>';
            }
        ?>
        </div>
        <h1 class="text-center">Selecciona tu fruta favorita</h1>
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Fruta</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for($i = 0;$i < 5; $i++){
                    if(isset($_GET['fruta'])){
                        if($frutas[$i][0] == $_GET['fruta']){
                            $frutas[$i][1] = "✔️ Seleccionada";
                        }
                    }
                    if($frutas[$i][0] == $_GET['fruta']){
                        echo '<tr class="table-success">
                                <td>'. $frutas[$i][0] .'</td>
                                <td>'. $frutas[$i][1] .'</td>
                                <td><a class="btn btn-primary" href="?fruta=' . $frutas[$i][0] . '&color='. $color .'">Seleccionar</a></td>
                            </tr>';
                    }else{
                        echo '<tr class="table-danger">
                            <td>'. $frutas[$i][0] .'</td>
                            <td>'. $frutas[$i][1] .'</td>
                            <td><a class="btn btn-primary" href="?fruta=' . $frutas[$i][0] . '&color='. $color .'">Seleccionar</a></td>
                        </tr>';
                    }
                }

                function muestraFrutas($frutas){
                    if(isset($_GET['fruta'])){
                        for($i = 0;$i < 5; $i++){
                            if($frutas[$i][0] == $_GET['fruta']){
                                echo '<div class="card mt-4 w-25 shadow-lg">
                                        <img src="'. $frutas[$i][2] .'" class="card-img-top img-fluid" alt="">
                                        <div class="card-body bg-warning">
                                            <h5 class="card-title">'. $_GET['fruta'] .'</h5>
                                            <p class="card-text">¡Esta es tu fruta favorita!</p>
                                        </div>
                                    </div>';
                            }
                        }
                    }
                }
                ?>
            </tbody>
        </table>
        <!-- Mostrar tarjeta de la fruta seleccionada (actualmente estatica, siempre hay una manzana) -->
            <?php
                muestraFrutas($frutas);
            ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>


<!-- aqui tienes el emoji de SELECCIONADA ✔️ para copiarlo y usarlo en la práctica -->