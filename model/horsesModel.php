<?php

function getAllHorses(){
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM horse";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function getAllBreeds(){
    $db = openDatabaseConnection();
    $sql = "SELECT name FROM breeds";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}

function create($data){
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("INSERT INTO horse (name, age, height, breed, breedId) values (:name, :age, :height, :breed, :breedId)");
    $query->execute(array(":name" => $data[0],":age" => $data[1],":height" => $data[2],":breed" => $data[3],":breedId" => $data[4]));
    $db = null;
    render("horses/index");
}
function update($data, $id){
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("UPDATE horse SET name=:name, age=:age, height=:height, breed=:breed, breedId=:breedId WHERE id=:id");
    $query->execute(array(":name" => $data[0],":age" => $data[1],":height" => $data[2],":breed" => $data[3],":breedId" => $data[4], ":id" => $id));
    $db = null;
    render("horses/index");
}
function delete($id){
    $db = openDatabaseConnection();
    $query = $db->prepare("DELETE FROM horse where id=:id");
    $query->execute(array(":id" => $id));
    $db= null;
    render('horses/index');
}

function sanitize($data){
    $data = array_map('trim', $data);
    $data = array_map('htmlspecialchars', $data);
    $data = array_map('stripcslashes', $data);
    return $data;
}
