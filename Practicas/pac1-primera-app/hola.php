<?php

function miNombre($nombre){
    echo "$nombre";
}

?>

<html>

    <head>
        <title>Visual Studio Code Remote :: PHP</title>
        <style>
            *{
                font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                margin: 0px;
                padding: 0px;
            }

            header{
                padding: 20px 5px;
                display: flex;
                align-items: center;
                justify-content: start;
                background-color: #303030;
                color: white;
            }

            footer{
                width: 100%;
                position: absolute;
                background-color: #303030;
                color: white;
                bottom: 0;
                padding: 5px 0px;
            }

            footer div{
                display: flex;
                justify-content: center;
                margin: 5px 0px;
            }

            main{
                display: flex;
                justify-content: center;
                margin: 50px 0px;
            }

            .container{
                width: 1300px;
                height: auto;
                display: flex;
                align-items: start;
            }

            .col1{
                width: 100%;
            }

            .col1 div img{
                border-radius: 100%;
                margin-bottom: 20px;
            }

            .col1 div{
                font-size: 26px;
                display: flex;
                justify-content: center;
            }

            .col2{
                width: 100%;
            }

        </style>
    </head>
    <body>
        <header>
            <div>
                <img src="https://www.fpllefia.com/images/logo40web.png" alt="imagen fpllefia">
            </div>
            <div>
                <h1>Módulo 7 - Práctica 1. Mi primera aplicacion en PHP</h1>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="col1">
                    <div>
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocKTBt2yv1vEv01FQUsvMllulM1yvfUb0dJ59zoJfXITEBckFl8e=s288-c-no" alt="foto eric">
                    </div>
                    <div>
                        <?php
                            miNombre('Eric Saez');
                        ?>
                    </div>
                </div>
                <div class="col2">
                    <?php
                        echo "Aquesta pàgina **hola.php** forma part de la pràctica 1 del mòdul 7. En el fitxer **index.php**, normalment s'hi defineixen les parts bàsiques d'una pàgina PHP, com ara el **header**, que conté informació inicial de la pàgina, així com el logo o títol, i el **body**, on es mostren els continguts principals. També es pot veure l'estructura de **columnes** que separen les diferents seccions del disseny."
                    ?>
                </div>
            </div>
        </main>    
        <footer>

            <div>
            <?php
                miNombre('Eric Saez Escalona');
            ?>
            </div>

            <div>
            <?php
                $fechaHoy = gmdate('Y-m-d');
                echo "La fecha de hoy es: $fechaHoy";
            ?>
            </div>

        </footer>
    </body>
</html>