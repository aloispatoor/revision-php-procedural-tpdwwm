<?php

    $sqlPeople = 'SELECT * FROM people INNER JOIN genders ON genders.gender_id = people.gender_id';
    $reqPeople = $db->prepare($sqlPeople);
    $reqPeople->execute();

    $peoples = $reqPeople->fetchAll();