<?php
    declare(strict_types=1);
    require '../app/includes/config.php';

    if(in_array('', $_POST)){
        header("Location:add-people.php?error=missingInput");
        exit();
    }else{
        $name = trim(htmlspecialchars($_POST['name']));
        $surname = trim(htmlspecialchars($_POST['surname']));
        $address = trim(htmlspecialchars($_POST['address']));
        $city = trim(htmlspecialchars($_POST['city']));
        $postalCode = trim(htmlspecialchars($_POST['postalcode']));
    }

    if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }

    try {
        $sqlVerif = 'SELECT COUNT(*) FROM people WHERE name = :name AND surname = :surname';
        $reqVerif = $db->prepare($sqlVerif);
        $reqVerif->bindValue(':name', $name, PDO::PARAM_STR);
        $reqVerif->bindValue(':surname', $surname, PDO::PARAM_STR);
        $reqVerif->execute();

        $resultVerif = $reqVerif->fetchColumn();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultVerif > 0) {
        header("Location:add-people.php?error=alreadyExists");
        exit();
    }

    try {
        $sqlInsert = 'INSERT INTO people (name, surname, gender_id, address, city, postal_code) VALUES (:name,:surname,:gender,:address,:city,:postalcode)';
        $reqInsert = $db->prepare($sqlInsert);
        $reqInsert->bindValue(':name', $name, PDO::PARAM_STR);
        $reqInsert->bindValue(':surname', $surname, PDO::PARAM_STR);
        $reqInsert->bindValue(':gender', $gender, PDO::PARAM_STR);
        $reqInsert->bindValue(':address', $address, PDO::PARAM_STR);
        $reqInsert->bindValue(':city', $city, PDO::PARAM_STR);
        $reqInsert->bindValue(':postalcode', $postalCode, PDO::PARAM_STR);

        $resultInsert = $reqInsert->execute();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultInsert) {
        header('Location:add-people.php?success=insertSuccess');
        exit();
    } else {
        header('Location:add-people.php?error=unknownError');
        exit();
    }