<?php 

require '../6/config.php';

if(in_array('', $_POST)){
    header("Location:add-ligne.php?error=missingInput");
    exit();
}else{
    $name = trim(htmlspecialchars($_POST['name']));
    $terminus_a = trim(htmlspecialchars($_POST['terminus_a']));
    $terminus_b = trim(htmlspecialchars($_POST['terminus_b']));
}

try{
    $sqlVerif = "SELECT COUNT(*) FROM lignes WHERE ligne_name = :name, terminus_a = :terminus_a, terminus_b = :terminus_b";
    $reqVerif = $db->prepare($sqlVerif);
    $reqVerif->bindValue(':name', $name, PDO::PARAM_STR);
    $reqVerif->bindValue(':terminus_a', $terminus_a, PDO::PARAM_STR);
    $reqVerif->bindValue(':terminus_b', $terminus_b, PDO::PARAM_STR);
    $reqVerif->execute();
    $resultVerif = $reqVerif->fetchColumn();
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage();
}

if($resultVerif > 0){
    header('Location:add-ligne.php?error=alreadyExists');
    exit();
}

try {
    $sqlInsert = 'INSERT INTO lignes (ligne_name,terminus_a,terminus_b) VALUES (:name,:terminus_a,:terminus_b)';
    $reqInsert = $db->prepare($sqlInsert);
    $reqInsert->bindValue(':name', $name, PDO::PARAM_STR);
    $reqInsert->bindValue(':terminus_a', $terminus_a, PDO::PARAM_STR);
    $reqInsert->bindValue(':terminus_b', $terminus_b, PDO::PARAM_STR);

    $resultInsert = $reqInsert->execute();
} catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage();
}

if(!$resultInsert){
    header('Location:add-ligne.php?error=alreadyExists');
    exit();
}else{
    header('Location:add-ligne.php?success=insertSuccess');
    exit();
}