<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
  //header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Faculty.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  echo "Connected";
  // Instantiate blog post object
  //$posts_arr = array();
  $post = new Faculty($db);

  // Blog post query
  $result = $post->
  readALlFaculty();
  // Get row count
  $num = $result->rowCount();
  //echo $num;
  // Check if any posts

  if($num > 0) {
    // Post array

     $posts_arr = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);

      $post_item = array(
        'faculty_id' => $id,
        'faculty_name' => $name
      );

      // Push to "data"
      //array_push($posts_arr, $post_item);
       array_push($posts_arr, $post_item);
    }

    //echo json_encode($post_item);

    // Turn to JSON & output
    //echo json_encode($posts_arr);
    // Turn to JSON & output
  //  echo json_encode(array($posts_arr);

  }
