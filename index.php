<?php

    /** Incluir los archivos de controladores requeridos */

    require_once "Controladores/rutas.controlador.php";


    /** Incluir los archivos de controladores requeridos */


    
    /** Inicializar la clase */
    $rutas = new RutasControlador();


    /** Ejecutar la función inicializar plantilla*/

    $rutas -> IniciarPlantillas();



?>