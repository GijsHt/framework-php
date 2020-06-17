<?php
require(ROOT . "model/horsesModel.php");
function index()
{
    render("horses/index");
}
function viewCreateForm(){
    render("horses/create");
}
function viewUpdateForm(){
    render("horses/update");
}

function save(){
    if ($_POST["breed"] == 'Dutch Warmblood') {
        $_POST["breedId"] = 1;
    } elseif ($_POST["breed"] == 'Dutch Heavy Draft') {
        $_POST["breedId"] = 2;
    } else {
        $_POST["breedId"] = 3;
    }

    $data = array($_POST["horseName"], $_POST["horseAge"], $_POST["horseHeight"], $_POST["breed"], $_POST["breedId"]);
    create($data);
}
function saveUpdateForm(){
    if ($_POST["breed"] == 'Dutch Warmblood') {
        $_POST["breedId"] = 1;
    } elseif ($_POST["breed"] == 'Dutch Heavy Draft') {
        $_POST["breedId"] = 2;
    } else {
        $_POST["breedId"] = 3;
    }
    $id = $_GET["id"];
    $data = array($_POST["horseName"], $_POST["horseAge"], $_POST["horseHeight"], $_POST["breed"],$_POST["breedId"]);
    update($data, $id);
}

function activateDeleteFunction(){
    $id = $_GET["id"];
    delete($id);
}