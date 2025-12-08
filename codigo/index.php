<?php
    session_start();
    require(__DIR__."/controlador/controlador.php");

    $accion = $_GET['a'] ?? "menu";

    $gen = $_GET['g'] ?? "";

    $instancia = new Controlador();
    
    if($accion == "menugen" || $accion == "pagprof"){
        $instancia -> $accion($gen);
    } else {
        $instancia -> $accion();
    } 
?>