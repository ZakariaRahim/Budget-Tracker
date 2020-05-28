<?php 

include_once '../private/init.php';
global $db;
$result = 0;

if(isset($_GET['action'])){

    if($_GET['action'] == 'balance'){
        // $result = 400;

        $result = $db->pdoQuery("SELECT SUM(cost) balance FROM budget")->aResults[0]['balance'];
        
    }


    if($_GET['action'] == 'revenue'){
        // $result = 400;

        $result = $db->pdoQuery("SELECT SUM(cost) revenue FROM budget WHERE type = 'revenue' ")->aResults[0]['revenue'];
        
    }


    if($_GET['action'] == 'expense'){
        // $result = 400;

        $result = $db->pdoQuery("SELECT SUM(cost)  expense FROM budget WHERE type = 'expense' ")->aResults[0]['expense'];
        
    }
}

echo (float)$result;

