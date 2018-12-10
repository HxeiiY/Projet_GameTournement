<?php

require_once('../CONTROLLER/GameManager.php');  

$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if(isset($_POST['action'])){
    $action = $_POST['action'];
}

$gameManager = new GameManager();

switch($action){
    case 'list-game':
    echo $gameManager->listGame();
    break;

    default:
}

?>