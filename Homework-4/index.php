<?php

$sql = mysqli_connect('localhost', 'root', 'password', 'EKhwDataBase');
if(!$sql) {
        die('Could not Connect:' .mysql_error());
}

$result = mysqli_query($sql, 'SELECT image_path, image_name FROM images  LIMIT 3 ');

$data = array();

while($row = mysqli_fetch_assoc($result)){
    $data[] = array(
             'imagePath' => $row['image_path'],
             'imageName' => $row['image_name'],
    );
}

$json_data = json_encode($data);

$json_file = file_get_contents('items.json');

$json_file .= $json_data;
 
file_put_contents('items.json', $json_data);

mysqli_close($sql);
;