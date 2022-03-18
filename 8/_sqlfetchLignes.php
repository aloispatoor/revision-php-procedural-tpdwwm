<?php

    $sqlLignes = 'SELECT * FROM lignes';
    $reqLignes = $db->prepare($sqlLignes);
    $reqLignes->execute();

    $lignes = $reqLignes->fetchAll();