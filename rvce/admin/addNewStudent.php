<?php
  header('Access-Control-Allow-Origin: *');
include_once '../modules/config1.php';

class addNewStudent{

  private $studentName;
  private $studentUsn;
  //private $studentDOB;
  private $studentEmail;
  private $studentSem;

  function getStudentDetails(){

    $this->studentName = $_POST['studentName'];
    $this->studentUsn = $_POST['studentUsn'];
    //$this->StudentDOB = $_POST['StudentDOB'];
    $this->studentEmail = $_POST['studentEmail'];
    $this->studentSem = $_POST['semester'];
    echo $this->studentSem;
  }

  function updateDatabase(){
    //echo $this->StudentName;
    //echo $this->Studentfsn;
    $database = new Database();
      $db = $database->connect();
      if($db)
        echo "COnnection Successful";
      else {
        echo "Connection Failed";
      }
      //$hash = password_hash($this->password, PASSWORD_DEFAULT);
      $statement = "INSERT INTO STUDENT (first_name,USN,semester,email) VALUES ('$this->studentName','$this->studentUsn','$this->studentSem','$this->studentEmail')";
      $stmt = $db->prepare($statement);
      //$stmt = "SELECT * FROM Student";
      if($stmt->execute()){
        header('Location:adminOptions.html');
        die();
      }
      else {
        die("Something Went Wrong!!");
      }
}
}

$newStudent = new addNewStudent();
$newStudent->getStudentDetails();
$newStudent->updateDatabase();

 ?>
