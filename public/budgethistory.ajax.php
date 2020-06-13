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
        <td>'. $data['author'].'</td>';

        if($data['type'] == 'revenue'){

            $table .= '<td><a href="'. url_for('/updateRevenue.php?id='). $data['id']  .'" class="btn btn-outline-primary">edit</a></td>';

        }else if($data['type'] == 'expense'){
            $table .= '<td><a href="' . url_for('updateExpense.php?id='). $data['id'] .'" class="btn btn-outline-primary">edit</a></td>';
        }
        $table .= '
        <td><a href="'. url_for('/delete.php?id='). $data['id'] .'" class="btn btn-outline-danger">delete</a></td>
        </tr>';
}
}


echo $table;