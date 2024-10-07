<?php
require_once 'model/robots.php';

function liste_robots_Action(){
    $robots = listes_robots(); 
    include_once 'views/liste_robots.php';
}

function createAction(){
    include_once 'views/create.php';   
}

function storeAction(){
    //var_dump($_POST);
    $isCreated = create();
    if ($isCreated) {
        header('Location: index.php?action=liste');
    } else {
        echo "Erreur lors de l'ajout du robot.";
    }
    exit;

}

function updateAction(){
    $id=$_GET['id'];
    $robot = select_by_id($id);
    //var_dump($robot);
    include_once 'views/update.php';
}


function updatefinAction(){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $isUpdated = update($name, $description, $id);
    
    if ($isUpdated) {
        header('Location: index.php?action=liste');
    } else {
        echo "Erreur lors de la mise à jour du robot.";
    }

    exit;
}

function distroyAction(){
    $id = $_GET['id'];
    delete($id);
    header('Location: index.php?action=liste');
}

function deleteAction(){
    $id=$_GET['id'];
    include_once 'views/delete.php';
}
?>
