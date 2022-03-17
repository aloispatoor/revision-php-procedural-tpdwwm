<?php

$alert = false;
    if(!empty($_GET) && (!empty($_GET['error']) || !empty($_GET['success']))){
        $alert = true;
        if(!empty($_GET['success'])){
            if($_GET['success'] == 'editSuccess'){
                $type = 'success';
                $message = 'Vous avez modifié la fiche d\'identité avec succès !';
            }
            if($_GET['success'] == 'deleteSuccess'){
                $type = 'success';
                $message = 'Vous avez supprimé la fiche d\'identité avec succès !';
            }
            if($_GET['success'] == 'insertSuccess'){
                $type = 'success';
                $message = 'Vous avez ajouté la fiche d\'identité avec succès !';
            }
        }
        if(!empty($_GET['error'])){
            if($_GET['error'] == 'missingInput'){
                $type = 'warning';
                $message = 'Les champs sont vides';
            }
            if($_GET['error'] == 'alreadyExists'){
                $type = 'warning';
                $message = 'La personne existe déjà dans la base de données !';
            }
            if($_GET['error'] == 'unknownError'){
                $type = 'danger';
                $message = 'Une erreur inconnue est survenue';
            }
        }
    }