<?php
    declare(strict_types=1);
    require "../6/config.php";

    if(in_array('', $_POST)){
        header("Location:edit-lignes.php?id={$_POST['ligne_id']}&error=missingInput");
        exit();
    }else{
        $name = trim(htmlspecialchars($_POST['name']));
        $terminus_a = trim(htmlspecialchars($_POST['terminus_a']));
        $terminus_b = trim(htmlspecialchars($_POST['terminus_b']));
    }
    
    try {
        $sqlUpdate = 'UPDATE lignes SET ligne_name=:ligne_name, terminus_a=:terminus_a, terminus_b=:terminus_b WHERE ligne_id=:ligne_id';
        $reqUpdate = $db->prepare($sqlUpdate);
        $reqUpdate->bindValue(':ligne_name', $name, PDO::PARAM_STR);
        $reqUpdate->bindValue(':terminus_a', $terminus_a, PDO::PARAM_STR);
        $reqUpdate->bindValue(':terminus_b', $terminus_b, PDO::PARAM_STR);
        $reqUpdate->bindValue(':ligne_id', $ligne_id, PDO::PARAM_INT);
    
        $reqUpdate->execute();
        header("Location:edit-lignes.php?success=editSuccess&id={$ligne_id}");
        exit();
    } catch (PDOException $e) {
        echo 'Erreur :'.$e->getMessage();
    }
    