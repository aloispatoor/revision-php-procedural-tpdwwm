<?php

    $sqlCars = 'SELECT * FROM vehicules';
    $reqCars = $db->prepare($sqlCars);
    $reqCars->execute();

    $cars = $reqCars->fetchAll();