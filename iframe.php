<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'autosalon';

$cities[] = array();
$services[] = array();

$con=mysqli_connect($hostname, $username, $password, $database);
mysqli_query($con, "SET NAMES 'utf8' ");
$query = "SELECT city.id, city.name FROM city";
$city = mysqli_query($con, $query);
while($row = mysqli_fetch_array($city)) {
	$cities[] = array('id' => $row['id'], 'name' => $row['name']);
}
array_shift($cities);

mysqli_query($con, "SET NAMES 'utf8' ");
$query = "SELECT service.id, service.address, service.cityId FROM service";
$modelService = mysqli_query($con, $query);
while($row = mysqli_fetch_array($modelService)) {
	$services[] = array('id' => $row['id'], 'address' => $row['address'], 'cityId' => $row['cityId']);
}
array_shift($services);

try {
	include 'views/iframe.php';
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>