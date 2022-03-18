<?php

try{
    $sqlViewLignes = 'SELECT * FROM lignes';
    $dbViewLignes = $db->query($sqlViewLignes);
    $lignes = $dbViewLignes->fetchAll();
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage() . $e->getCode();
}