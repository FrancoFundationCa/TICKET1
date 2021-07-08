<?PHP

include('connection.php');

$object = new connection();

$connection = $object->connect();

$consult = "SELECT * from participantes";

$result = $connection->prepare($consult);

$result->execute();

$datos = $result->fetchall();

//var_dump($datos);

foreach ($datos as $dato){

    echo($dato['name']."<br>");

}
