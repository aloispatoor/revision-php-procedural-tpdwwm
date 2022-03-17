<?php

try{
    $sqlViewGenders = 'SELECT * FROM genders';
    $dbViewGenders = $db->query($sqlViewGenders);
    $genders = $dbViewGenders->fetchAll();
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage() . $e->getCode();
}