<?php

    require_once('../CONTROLLER/UserManager.php');    

    $action = '';

    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }

    if(isset($_POST['action'])){
        $action = $_POST['action'];
    }

    $userManager = new UserManager();
    switch($action){
        case 'log-user':
        echo $userManager->connectUser($_POST);
        break;
        
        case 'unlog-user':
        echo $userManager->deconnectUser();
        break;
        
        case 'create-user':
        echo $userManager->createUser($_POST);
        break;

        case 'infos-user':
        echo $userManager->infosUser($_POST);
        break;

        default:
    }

?>