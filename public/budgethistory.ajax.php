<?php

include_once "../private/init.php";
global $db;

$sql = "SELECT * FROM budget";

$result = $db->pdoQuery($sql)->aResults;

$table = '';
if(!empty($result)){
    foreach ($result as $data) {
        $table .= '<tr>
        <td>'. $data['date'] .'</td>
        <td>'. $data['description'].'</td>
        <td>'. $data['type'].'</td>
        <td>'. $data['cost'].'</td>
        <td>'. $data['author'].'</td>
        <td><a href="#" class="btn btn-outline-primary">edit</a></td>
        <td><a href="#" class="btn btn-outline-danger">delete</a></td>
        </tr>';
}
}


echo $table;