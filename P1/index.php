<?php
require_once __DIR__ . '/controllers/PatrocinadorController.php';

$action = $_GET['action'] ?? '';

$controller = new PatrocinadorController();

switch ($action) {
    case 'storePatrocinador':
        $controller->store();
        break;

    case 'createPatrocinador':
    default:
        $controller->createForm();
        break;
}
?>
