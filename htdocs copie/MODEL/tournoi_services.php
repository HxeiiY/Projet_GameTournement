<?php
require_once('../CONTROLLER/TournoiManager.php');  

$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
}

$tournoiManager = new TournoiManager();
    switch($action){
        case 'createTournoi':
        echo $tournoiManager->createTournoi($_POST);
        break;
    }


?>