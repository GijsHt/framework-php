<?php

function getAllCustomers(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM customer";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function create($data){
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("INSERT INTO customer (name, adres, postalCode, city, phone, email) values (:name, :adres, :postalCode, :city, :phone, :email)");
    $query->execute(array(":name" => $data[0],":adres" => $data[1],":postalCode" => $data[2],":city" => $data[3],":phone" => $data[4],":email" => $data[5], ));
    $db = null;
    render("customers/index");
}

function update($data, $id){
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("UPDATE customer SET name=:name, adres=:adres, postalCode=:postalCode, city=:city, phone=:phone, email=:email WHERE id=:id");
    $query->execute(array(":name" => $data[0],":adres" => $data[1],":postalCode" => $data[2],":city" => $data[3],":phone" => $data[4],":email" => $data[5], ":id" => $id));
    $db = null;
    render("customers/index");
}

function delete($id){
    $db = openDatabaseConnection();
    $query = $db->prepare("DELETE FROM customer where id=:id");
    $query->execute(array(":id" => $id));
    $db= null;
    render('customers/index');
}

function sanitize($data){
    $data = array_map('trim', $data);
    $data = array_map('htmlspecialchars', $data);
    $data = array_map('stripcslashes', $data);
    return $data;
}
