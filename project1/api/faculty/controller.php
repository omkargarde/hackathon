<?php
if(isset($_POST['facultyLoginSubmit']))
{
  $data = array('facultyLoginId' => $_POST['facultyLoginId'] ,'facultyLoginPassword' => $_POST['facultyLoginPassword'] );
  $client = curl_init("http://localhost/api/faculty/facultyLogin.php?action=checkCredentials");
  curl_setopt($client,CURLOPT_POST,true);
  curl_setopt($client,CURLOPT_POSTFIELDS,$data);
  curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
  $response = curl_exec($client);
  curl_close($client);
  }

 ?>
