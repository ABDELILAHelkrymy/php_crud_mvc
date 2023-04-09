<?php
require_once 'controller/stagaire_controller.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'list':
            listeStagaireAction();
            break;
        
        case 'create':
            createAction();
            break;

        case 'store':
            storeAction();
            break;

        case 'delete':
            deleteAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'update':
            updateAction();
            break;
    }
}

