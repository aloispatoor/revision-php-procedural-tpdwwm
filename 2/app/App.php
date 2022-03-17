<?php
    declare(strict_types=1);
    require 'includes/config.php';



    if(in_array('', $_POST)){
        header("Location:add-car.php?error=missingInput");
        exit();
    }else{
        $constructor = trim(htmlspecialchars($_POST['constructor']));
        $modele = trim(htmlspecialchars($_POST['modele']));
        $color = trim(htmlspecialchars($_POST['color']));
        $km = (float) trim(htmlspecialchars($_POST['km']));
        $release_date = trim(htmlspecialchars($_POST['release_date']));
        $price = (float) trim(htmlspecialchars($_POST['price']));
    }


    try {
        $sqlVerif = 'SELECT COUNT(*) FROM vehicules WHERE constructor = :constructor AND modele = :modele AND color = :color AND km = :km AND release_date = :release_date';
        $reqVerif = $db->prepare($sqlVerif);
        $reqVerif->bindValue(':constructor', $constructor, PDO::PARAM_STR);
        $reqVerif->bindValue(':modele', $modele, PDO::PARAM_STR);
        $reqVerif->bindValue(':color', $color, PDO::PARAM_STR);
        $reqVerif->bindValue(':km', $km, PDO::PARAM_STR);
        $reqVerif->bindValue(':release_date', $release_date, PDO::PARAM_STR);
        $reqVerif->execute();

        $resultVerif = $reqVerif->fetchColumn();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultVerif > 0) {
        header("Location:add-car.php?error=alreadyExists");
        exit();
    }

    try {
        $sqlInsert = 'INSERT INTO vehicules (constructor, modele, km, color, release_date, price) VALUES (:constructor, :modele, :km, :color, :release_date, :price)';
        $reqInsert = $db->prepare($sqlInsert);
        $reqInsert->bindValue(':constructor', $constructor, PDO::PARAM_STR);
        $reqInsert->bindValue(':modele', $modele, PDO::PARAM_STR);
        $reqInsert->bindValue(':color', $color, PDO::PARAM_STR);
        $reqInsert->bindValue(':km', $km, PDO::PARAM_STR);
        $reqInsert->bindValue(':release_date', $release_date, PDO::PARAM_STR);
        $reqInsert->bindValue(':price', $price, PDO::PARAM_STR);

        $resultInsert = $reqInsert->execute();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultInsert) {
        header('Location:add-car.php?success=insertSuccess');
        exit();
    } else {
        header('Location:add-car.php?error=unknownError');
        exit();
    }