<?php

$ligne_id = $_POST['ligne_id'] ?? $_GET['id'];

try{
    $sqlSingleLigne = 'SELECT * FROM lignes WHERE ligne_id = :ligne_id';
    $reqSingleLigne = $db->prepare($sqlSingleLigne);
    $reqSingleLigne->bindValue(':ligne_id', $ligne_id);
    $reqSingleLigne->execute();

    $singleLigne = $reqSingleLigne->fetch();
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage().$e->getCode();
}