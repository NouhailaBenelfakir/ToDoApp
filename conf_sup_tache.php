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
        <title>suprimer tache</title>
    </head>
    <body>
    <div class="task-container">
    <div class="box">
    <strong><span class="assurer">Voulez-vous vraiment supprimer cette tache? </span></strong><br>
    <div class="choix">
    <a href="index.php" class="choix1" >Non</a> 
    <a href="supprimer_tache.php?id_tache='.$id_tache.'" class="choix1" >Oui</a>
    </div>';
?>