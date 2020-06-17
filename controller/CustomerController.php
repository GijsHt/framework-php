<?php

require(ROOT . "model/customersModel.php");

function index(){
	render("customers/index");
}

function viewCreateForm(){
    render("customers/create");
}
function viewUpdateForm(){
    render("customers/update");
}

function save(){
    $data = array($_POST["name"], $_POST["address"], $_POST["postalCode"], $_POST["city"],$_POST["phone"],$_POST["email"]);
    create($data);
}
function saveUpdateForm(){
    $id = $_GET["id"];
    $data = array($_POST["name"], $_POST["address"], $_POST["postalCode"], $_POST["city"],$_POST["phone"],$_POST["email"]);
    update($data, $id);
}

function activateDeleteFunction(){
    $id = $_GET["id"];
    delete($id);
}