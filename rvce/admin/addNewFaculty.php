<?php
  header('Access-Control-Allow-Origin: *');
include_once 'config1.php';

class addNewFaculty{

  private $facultyName;
  private $facultyfsn;
  private $facultyPassword;
  private $facultyEmail;

  function getFacultyDetails(){

    $this->facultyName = $_POST['facultyName'];
    $this->facultyfsn = $_POST['facultyfsn'];
    //$this->facultyDOB = $_POST['facultyDOB'];
   $this->facultyEmail = $_POST['facultyEmail'];
    $this->facultyPassword = $_POST['facultyPassword'];
  }

  function updateDatabase(){
    //echo $this->facultyName;
    //echo $this->facultyfsn
    $db = $conn;
      if($db)
        echo "COnnection Successful";
        //echo "Connection Failed";

        echo $this->facultyName;
      $statement = "INSERT INTO user (uname,password,email,status,created) VALUES ('$this->facultyName','$this->facultyPassword','$this->facultyEmail','1','3421')";
      $stmt = $db->prepare($statement);
      //$stmt = "SELECT * FROM faculty";
      if($stmt->execute()){
        echo "Database Updated Successfully";
      }
      else {
        die("Something Went Wrong!!");
      }
      if(!empty($_POST['courseCode'])){
      // Loop to store and display values of individual checked checkbox.
      foreach($_POST['courseCode'] as $selected){
      //$sql =  "INSERT INTO course (code,name,sem,fid) VALUES ('$selected','ftygv','6','$this->facultyfsn')";
      echo $selected;
      $sql = "INSERT INTO user_subject(uid,id) VALUES ('$this->facultyId','$selected')";
      $stmt = $db->prepare($sql);
      if($stmt->execute())
      {
        echo "Updated";
      }
      else {
        echo "Not Updated";
      }
      }
    }
      /*$hash = password_hash($this->password, PASSWORD_DEFAULT);*/

}
}

$newFaculty = new addNewFaculty();
$newFaculty->getFacultyDetails();
$newFaculty->updateDatabase();

 ?>
