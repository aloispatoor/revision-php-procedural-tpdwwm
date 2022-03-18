<?php

declare(strict_types=1);
require '../6/config.php';
require '../9/_sqlFetchSingle.php';

$product_id = filter_input(INPUT_POST, 'product_id');


try {
    $sqlDeleteOffer = 'DELETE FROM lignes WHERE ligne_id = :ligne_id';
    $reqDeleteOffer = $db->prepare($sqlDeleteOffer);
    $reqDeleteOffer->bindValue(':ligne_id', $ligne_id, PDO::PARAM_STR);
    $reqDeleteOffer->execute();

    header('Location:../8/lignes.php?success=deleteSuccess');
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage();
}