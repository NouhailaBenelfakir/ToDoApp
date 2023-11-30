<?php
include_once('entete.php');
    $id_tache = $_GET['id_tache'];
    $description = $_POST['description'];
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $db=new PDO('mysql:host=localhost;dbname=todoapp', 'root', '');
    $a = 'UPDATE `tache` SET `id`=null,`description`=:ds,`date_debut`=:db,`date_fin`=:df WHERE id = :id';
    $d = array(
        "id"=>$id_tache,
        "ds"=>$description,
        "db"=>$date_debut,
        "df"=>$date_fin
    );
    $res = $db->prepare($a);
    $res->execute($d);
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
    <h1 class="supprimee">Tache modifiee avec succee .</h1>
    <a href="index.php" class="choix1">listes des taches</a>
    </div>';

?>
