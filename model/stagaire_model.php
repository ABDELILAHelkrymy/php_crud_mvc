<?php 

function databaseConnection(){
    $pdo = new PDO(dsn: 'mysql:dbname=learn_mvc;host=127.0.0.0', username: 'root', password: '');
    return $pdo;
}

function getListeStagaires(){
    $pdo = databaseConnection();
    $stm = 'SELECT * FROM stagaire';
    $stagaires = $pdo->query($stm)->fetchAll(mode: PDO::FETCH_OBJ);
    return $stagaires;
}

function createStagaire($data){
    $pdo = databaseConnection();
    $stm = 'INSERT INTO stagaire VALUES (null, ?, ?, ?, ?, ?)';
    $stmt = $pdo->prepare($stm);
    $stmt->execute($data);
}

function deleteStagaire($id){
    $pdo = databaseConnection();
    $stm = 'DELETE FROM stagaire WHERE id = ?';
    $stmt = $pdo->prepare($stm);
    $stmt->execute([$id]);
}

function getStagaire($id){
    $pdo = databaseConnection();
    $stm = 'SELECT * FROM stagaire WHERE id = ?';
    $stmt = $pdo->prepare($stm);
    $stmt->execute([$id]);
    $stagaire = $stmt->fetch(mode: PDO::FETCH_OBJ);
    return $stagaire;
}

function editStagaire($data){
    $pdo = databaseConnection();
    $stm = 'UPDATE stagaire SET first_name = ?, last_name = ?, age = ?, username = ?, password = ? WHERE id = ?';
    $stmt = $pdo->prepare($stm);
    $stmt->execute($data);
}