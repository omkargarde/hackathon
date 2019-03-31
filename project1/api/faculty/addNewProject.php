<?php

include_once '../../config/Database.php';


      $projectId = $_POST['projectName'];
      $projectName = $_POST['projectName'];
      $projectAgency = $_POST['projectAgency'];
      $projectAmount = $_POST['projectAmount'];
      $projectTopic = $_POST['projectTopic'];
      $projectField = $_POST['projectField'];
      $projectYear = $_POST['projectYear'];


      //echo $projectId;
      //echo$projectAmount;
      //echo $projectYear;
      $conn = new Database();
      $connection = $conn->connect();
      echo "here2";
      //$sql = "INSERT INTO project(id,name,agency,amount,topic,year,field) VALUES(".$projectId.'myProject','myAgency',1000,'Embedded',1999,'System')";      /*$stmt = $connection->prepare($sql);
      //$sql = "INSERT INTO project(id,name,agency,amount,topic,year,field) VALUES '(' .$projectId.',' . $projectName .','.$projectAgency.','.$projectAmount.','.$projectTopic.','$projectYear.','.$projectField.')'";
      /*$stmt->bindParam(':projectId',$projectId);
      $stmt->bndParam(':projectName',$projectName);
      $stmt->bindParam(':projectAgency',$projectAgency);
      $stmt->bindParam(':projectAmount',$projectAmount);
      $stmt->bindParam(':projectTopic',$projectTopic);
      $stmt->bindParam(':projectField',$projectField)
      $stmt = $connection->prepare("INSERT INTO project (id, name, agency, amount,topic,year,field) VALUES (:projectId, :projectName, :projectAgency,:projectAmount,:projectTopic,:projectYear,:projectField)");
    $stmt->bindParam(':projectId', $projectId);
    $stmt->bindParam(':projectName', $projectName);
    $stmt->bindParam(':projectAgency', $projectAgency);
    $stmt->bindParam(':projectAmount',$projectAmount);
    $stmt->bindParam('projectTopic',$projectTopic);
    $stmt->bindParam('projectYear',$projectYear);
    $stmt->projectField('projectField',$projectField);*/
    $statement = "INSERT INTO project (id,name,agency,amount,topic,field,year) VALUES ('$projectId','$projectName','$projectAgency',$projectAmount,'$projectTopic','$projectField',$projectYear)";
    $stmt = $connection->prepare($statement);
    if($stmt->execute())
      echo"Entry Added Successfully";
    else {
      echo 'Something Went Wrong';
    }
?>
