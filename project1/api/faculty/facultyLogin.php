<?php
include_once '../../config/Database.php';
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

$con = new Database();
$connection = $con->connect();

$loginId = $_POST['facultyLoginId'];
$password = $_POST['facultyLoginPassword'];


$query= "SELECT * FROM faculty WHERE id = "."'$loginId'"." AND password =".$password;
$stmt = $connection->prepare($query);
$stmt->execute();
$num = $stmt->rowCount();

if($num > 0)
{
  header('Location:facultyOptions.html');
  die();

}
else {
  echo "Wrong Username or Password";
}

 ?>
