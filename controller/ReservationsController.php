<?php
require(ROOT . "model/reservationsModel.php");

function index(){
render("reservations/index");
}

function activateDeleteFunction(){
    $id = $_GET["id"];
    delete($id);
}
function viewCustomerReservations(){
    $name = $_GET["name"];
    getAllReservations($name);
    render("reservations/customersReservations");
}
function viewCreateForm(){
    render("reservations/create");
}
function viewUpdateForm(){
    render("reservations/update");
}

function save(){
    $duration = $_POST["duration"];
    $_POST["price"] = $duration * 55;
    $data = array($_POST["customerName"], $_POST["horseName"], $_POST["startTime"], $_POST["duration"], $_POST["price"]);
    create($data);
}
function saveUpdateForm(){
    $id = $_GET["id"];
    $duration = $_POST["duration"];
    $_POST["price"] = $duration * 55;
    $data = array($_POST["customerName"], $_POST["horseName"], $_POST["startTime"], $_POST["duration"], $_POST["price"]);
    create($data,$id);
}