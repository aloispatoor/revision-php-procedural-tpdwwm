<?php
    declare(strict_types=1);
    require 'includes/config.php';

    if (empty($_POST['email']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) {
        header('Location:../views/home.php?error=missingInput');
        exit();
    } else {
        $email = trim(htmlspecialchars($_POST['email']));
        $username = trim(htmlspecialchars($_POST['username']));
        $password = trim(htmlspecialchars($_POST['password']));
        $password2 = trim(htmlspecialchars($_POST['password2']));
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location:../views/home.php?error=invalidEmail');
        exit();
    }

    if (strlen($username) < 3 || strlen($username) > 100) {
        header('Location:../views/home.php?error=invalidUsername');
        exit();
    }

    if (strlen($password) <= 6 || strlen($password) > 100) {
        header('Location:../views/home.php?error=invalidPassword');
        exit();
    }

    try {
        $sqlVerif = 'SELECT COUNT(*) FROM users WHERE email = :email OR username = :username';
        $reqVerif = $db->prepare($sqlVerif);
        $reqVerif->bindValue(':email', $email, PDO::PARAM_STR);
        $reqVerif->bindValue(':username', $username, PDO::PARAM_STR);
        $reqVerif->execute();

        $resultVerif = $reqVerif->fetchColumn();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultVerif > 0) {
        header('Location:../views/home.php?error=alreadyExists');
        exit();
    }


    if ($password !== $password2) {
        header('Location:../views/home.php?error=passwordsNotMatching');
        exit();
    }


    $password = password_hash($password, PASSWORD_DEFAULT);

    try {
        $sqlInsert = 'INSERT INTO users (email,username,password) VALUES (:email,:username,:password)';
        $reqInsert = $db->prepare($sqlInsert);
        $reqInsert->bindValue(':email', $email, PDO::PARAM_STR);
        $reqInsert->bindValue(':username', $username, PDO::PARAM_STR);
        $reqInsert->bindValue(':password', $password, PDO::PARAM_STR);

        $resultInsert = $reqInsert->execute();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }

    if ($resultInsert) {
        header('Location:../views/home.php?success=signUpSuccess');
        exit();
    } else {
        header('Location:../views/home.php?error=unknownError');
        exit();
    }



