<?php

function connexion_database(){
    try {
        $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=test', 'pgadmin4', 'romea63*');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        exit;
    }
}

function listes_robots(){
    $pdo = connexion_database(); 
    $stmt = $pdo->query('SELECT id, name, description FROM robot');
    $robots = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $robots;
}

function create(){
    try {
        $name = $_POST['name'];
        $id_powercat = $_POST['id_powercat']; 
        $description = $_POST['description'];
        $pdo = connexion_database();
        $sqlstate = $pdo->prepare("INSERT INTO robot (id, name,id_powercat,description) VALUES (null, ?, ?, ?);");
        return $sqlstate->execute([$name, $id_powercat, $description]);
    } catch (PDOException $e) {
        echo "Erreur lors de l'ajout du robot : " . $e->getMessage();
        return false;
    }
}

function select_by_id($id){
    $pdo = connexion_database();
    $stmt = $pdo->prepare('SELECT id, name, description FROM robot WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}

function update($name, $description, $id){
    $pdo = connexion_database();
    $sqlstate = $pdo->prepare("update robot set name= ? , description = ? where id = ?");
    return $sqlstate->execute([$name, $description, $id]);
}

function delete($id){
    $pdo = connexion_database();
    $sqlstate = $pdo->prepare("delete from robot where id = ?");
    return $sqlstate->execute([$id]);
}
?>
