<?php
    require 'config.php';

    try{
        $sqlTransports = "SELECT * FROM lignes";
        $reqTransports = $db->prepare($sqlTransports);
        $reqTransports->execute();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    echo "<pre>";
    var_dump($reqTransports);
    echo "</pre>";