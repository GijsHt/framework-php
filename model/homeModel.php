<?php
function getThreeCustomers(){
        $db = openDatabaseConnection();
        $sql = "SELECT * FROM customer LIMIT 3";
        $query = $db->prepare($sql);
        $query->execute();
        $db = null;
        return $query->fetchAll();
}

function getThreeHorses(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM horse LIMIT 3";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getThreeReservations(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM reservation LIMIT 3";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}