<?php
require_once 'controller/robots_controler.php';

if (isset($_GET['action'])){
    $action=$_GET['action'];
    switch($action){
        case 'liste':
            liste_robots_Action();
            break;
        case 'create':
            createAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            deleteAction();
            break;
        case 'destroy':
            distroyAction($id);
            break;
        case 'store':
            storeAction();
            break;
        case 'updatefin':
            updatefinAction();
            break;
    }
}
?>
