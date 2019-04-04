<?php

if(isset($_POST['facultyDetailsSubmit']))
{
if(!empty($_POST['courseCode']))
{
  foreach($_POST['courseCode'] as $selected) {

    echo $selected."</br>";
    // code...
  }
}
}



 ?>
