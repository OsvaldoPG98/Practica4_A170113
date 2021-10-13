<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client( "http://localhost/Practica4_A170113/servidor.php");
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    $resultado = $cliente->call("getFrutas", array ("datos" => "Frutas"));
    if ($cliente->fault) {
        echo "<h2>Fallo al llamar al metodo</h2>";
        print_r($resultado);
        echo "</pre>";
    }
    else {
        $error = $cliente->getError();
        if ($error) {
            echo "<h2>Error</h2><pre>" . $error . "</pre>";
        }
        else {
            echo "<h2> Frutas </h2><pre>";
            echo $resultado;
            echo "</pre>";
        }
    }
?>