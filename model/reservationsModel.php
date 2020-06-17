<?
function getAllReservations($name){
$db = openDatabaseConnection();
$sql = "SELECT * FROM reservation where customername=:name";
$query = $db->prepare($sql);
$query->execute(array(":name"=>$name));
$db = null;
return $query->fetchAll();
}
function getNames(){
    $db = openDatabaseConnection();
    $sql = "SELECT Distinct customername FROM reservation";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}
function getAllNames(){
    $db = openDatabaseConnection();
    $sql = "SELECT Distinct name FROM customer";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}
function getAllHorses(){
    $db = openDatabaseConnection();
    $sql = "SELECT Distinct name FROM horse";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetchAll();
}
function delete($id){
    $db = openDatabaseConnection();
    $query = $db->prepare("DELETE FROM reservation where id=:id");
    $query->execute(array(":id" => $id));
    $db= null;
    render('reservations/index');
}

function create($data){
    $duration = $_POST["duration"];
    $_POST["price"] = $duration * 55;
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("INSERT INTO reservation (customername, horsename, starttime, duration, price) values (:customerName, :horseName, :startTime, :duration, :price)");
    $query->execute(array(":customerName" => $data[0],":horseName" => $data[1],":startTime" => $data[2],":duration" => $data[3],":price" => $data[4]));
    $db = null;
    render("reservations/index");
}
function update($data,$id){
    $duration = $_POST["duration"];
    $_POST["price"] = $duration * 55;
    sanitize($data);
    $db = openDatabaseConnection();
    $query = $db->prepare("UPDATE reservation SET customername=:customerName, horsename=:horseName, starttime=:startTime, duration=:duration, price=:price WHERE id=:id");
    $query->execute(array(":customerName" => $data[0],":horseName" => $data[1],":startTime" => $data[2],":duration" => $data[3],":price" => $data[4], ":id" => $id));
    $db = null;
    render("reservations/index");
}


function sanitize($data){
    $data = array_map('trim', $data);
    $data = array_map('htmlspecialchars', $data);
    $data = array_map('stripcslashes', $data);
    return $data;
}
