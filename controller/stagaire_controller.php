<?php 
require_once 'model/stagaire_model.php';

function listeStagaireAction(){
    $stagaires = getListeStagaires();
    require_once 'views/liste-stagaire.php';
}

function createAction() {
    require_once 'views/create_stagaire.php';
}

function storeAction() {
    $data = [
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['age'],
        $_POST['username'],
        $_POST['password']
    ];
    createStagaire($data);
    header('Location: index.php?action=list');
}


function editAction() {
    $id = $_GET['id'];
    $stagaire = getStagaire($id);
    require_once 'views/edit_stagaire.php';
}

function updateAction() {
    $data = [
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['age'],
        $_POST['username'],
        $_POST['password'],
        $_POST['id']
    ];
    editStagaire($data);
    header('Location: index.php?action=list');
}

function deleteAction() {
    $id = $_GET['id'];
    deleteStagaire($id);
    header('Location: index.php?action=list');
}