<?php
  header('Access-Control-Allow-Origin: *');
include_once '../../config/Database.php';

class addNewFaculty{

  private $facultyName;
  private $facultyId;
  private $facultyDOB;
  private $facultyEmail;
  private $facultyPassword;

  function getFacultyDetails(){

    $this->facultyName = $_POST['facultyName'];
    $this->facultyId = $_POST['facultyId'];
    $this->facultyDOB = $_POST['facultyDOB'];
    $this->facultyEmail = $_POST['facultyEmail'];
    $this->facultyPassword = $_POST['facultyPassword'];
  }

  function updateDatabase(){
    //echo $this->facultyName;
      $database = new Database();
      $db = $database->connect();
      if($db)
        echo "COnnection Successful";
      else {
        echo "Connection Failed";
      }
      $statement = "INSERT INTO faculty (name,id,dateOfBirth,email,password) VALUES ('$this->facultyName','$this->facultyId','$this->facultyDOB','$this->facultyEmail','$this->facultyPassword')";
      $stmt = $db->prepare($statement);
      //$stmt = "SELECT * FROM faculty";
      if($stmt->execute()){
        header('Location:adminOptions.html');
        die();
      }
      else {
        die("Something Went Wrong!!");
      }
    }
}

$newFaculty = new addNewFaculty();
$newFaculty->getFacultyDetails();
$newFaculty->updateDatabase();

 ?>
