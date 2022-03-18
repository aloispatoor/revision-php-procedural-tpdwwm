<?php
    declare(strict_types=1);
    require 'includes/config.php';

    if (in_array('', $_POST)) {
        header('Location:../views/signIn.php?error=missingInput');
        exit();
    } else {
        $username = trim(htmlspecialchars($_POST['username']));
        $password = trim(htmlspecialchars($_POST['password']));
    }

    if(filter_var($username, FILTER_VALIDATE_EMAIL) || strlen($username) < 3){
        header('Location:../views/signIn.php?error=invalidUsername');
        exit();
    }

    try{
        $sqlSearchUser = 'SELECT * FROM users WHERE email = :username OR username = :username';
        $reqSearchUser = $db->prepare($sqlSearchUser);
        $reqSearchUser->bindValue(':username', $username, PDO::PARAM_STR);
        $reqSearchUser->execute();

        $user = $reqSearchUser->fetch(); #Récupère un seul élément
    } catch(PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
        exit();
    }

    if($user){
        if(!password_verify($password, $user['password'])){
            header('Location:../views/signIn.php?error=passwordUsernameNotMatching');
            exit();
        }else{
            $_SESSION['user'] = $user['username'];
            $_SESSION['id'] = $user['users_id'];
            $_SESSION['token'] = md5(uniqid('csrf',true)); #Création du token unique à chaque session d'user
            header('Location:../views/signIn.php?success=signInSuccess');
            exit();
        }
    }