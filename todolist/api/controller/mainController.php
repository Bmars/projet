<?php

// je dois importer mon Model et mon TodoController ici
require_once '../model.php';
require_once 'Todocontroller.php';

// je crée mes instances de classes Model et TodoController
$model = new Model();

// on crée une nouvelle instance de la classe TodoController et on lui passe l'instance de la classe Model su'on vient de créer
$controller = new TodoController($model);

// en fonction de la requête JS que je vais recevoir, je vais faire différentes actions
// pour connaître le type de requête, on peut utiliser la superglobale $_SERVER
if ($_SERVER['REQUEST_METHOD'] === "GET") {
    # je vais gérer les requêtes en GET
    $controller->getAll();
}