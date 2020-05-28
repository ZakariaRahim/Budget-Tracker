<?php
if(isset($_SESSION)){
    session_unset();
    session_destroy();
    header('location: index.php');
}else{
    header('location: index.php');
}













?>