<?php
include_once('entete.php');
    $id_tache = $_GET['id_tache'];

    echo '
            <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/TODOAPP/tache.css">
            <title>modifier tache</title>
        </head>
        <body>
    <div class="task-container">
    <div class="box">
    <strong><span class="assurer">Etes vous sure de vouloir modifié catte tache? </span></strong><br>
            <div class="choix">
                <a href="index.php" class="choix1">non je ne suis pas sure</a> / 
                <a href="index_modif.php?id_tache='.$id_tache.'" class="choix1">oui je suis sure</a> 
            </div>
            </div>';
?>
