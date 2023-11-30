<?php
include_once('entete.php');
    $id_tache = $_GET['id_tache'];

    //suppression de la tache de la base de données

    $db = new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    $rq = 'DELETE FROM tache WHERE id = :id';
    $v = array('id' => $id_tache);
    $res = $db->prepare($rq);
    $res->execute($v);
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/TODOAPP/tache.css">
        <title>suprimer tache</title>
    </head>
    <body>
    <div class="task-container">
    <div class="box">
    <h1 class="supprimee">Tache supprimee.</h1>
    <a href="index.php" class="choix1">Terminer</a>
    </div>';

?>