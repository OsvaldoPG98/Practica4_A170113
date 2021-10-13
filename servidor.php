<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos) {
        if ($datos == "Frutas") {
            return join(" ", array(
                " Manzana <br>",
                "Sandia <br>",
                "Durazno <br>",
                "Fresa <br>",
                "Naranja <br>",
                "Melon <br>",
                "Mango <br>",
                "Piña <br>",
                "Pera <br>",
                "Uva"
            ));
        }
        else {
            return "No hay resultados";
        }
    }
    $servidor = new soap_server();
    $servidor->register("getFrutas");
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( "php://input" );
        $servidor->service( $HTTP_RAW_POST_DATA );
?>