<?php
$client = curl_init('http://localhost/project/api/faculty/getAllFaculty.php?action=encodeData');
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
$output = '<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
    <body>
    <center>
    <div class = "table">
    <table class = "table-responsive">
    <thead class = "thead-dark">
      <tr>
      <th scope = "col">ID</th>
      <th scope = "col">Password</th>
      </tr>
    </thead>
    <tbody>
    ';
if(count($result) > 0){
    foreach($result as $row){
        $output .=
                '<tr>
                <td>'.$row->facultyId.'</td>
                <td>'.$row->facultyName.'</td>
            </tr>';
    }
  $output.= ' </tbody>
    </table>
    </div>
    </center>
    </body>
    </html>';

}else{
    $output .= '<tr><td colspan="3" align="center">Not found!</td></tr>';
}
echo $output;
/*$result = file_get_contents("http://localhost/project/api/faculty/getAllFaculty.php?action=encodeData");
// Will dump a beauty json :3
var_dump(json_decode($result, true));*/
?>
