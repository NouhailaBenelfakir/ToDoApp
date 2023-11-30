<?php
include_once('entete.php');

$db = new PDO('mysql:host=localhost; dbname=todoapp', 'root', '');
$rq = 'SELECT * FROM tache';
$v = array();
$res = $db->prepare($rq);
$res->execute($v);

$i = 0;
while ($t = $res->fetch(PDO::FETCH_OBJ)) {
    $i++;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TODOAPP/tache.css">
    <title>Liste des taches</title>
</head>
<body>
    <div class="task-container">
        <div class="box">
            <h1>Liste de mes taches (<?php echo $i; ?>)</h1>

            <?php
            $db = new PDO('mysql:host=localhost; dbname=todoapp', 'root', '');
            $rq = 'SELECT * FROM tache';
            $v = array();
            $res = $db->prepare($rq);
            $res->execute($v);

            $i = 1;
            while ($t = $res->fetch(PDO::FETCH_OBJ)) {
                echo '
                <p class="liste">
                    <strong><span class="description">' .$i . '_' . $t->description . '</span></strong><br>
                    <div class="dates">
                        <span class="date">du ' . $t->date_debut . '</span>
                        <span class="date">   au ' . $t->date_fin . '</span><br>
                    </div>
                    <div class="faire">
                        <a href="conf_sup_tache.php?id_tache=' . $t->id . '" class="tache">Supprimer</a>
                        <a href="modif_tache.php?id_tache=' . $t->id . '" class="tache">Modifier cette tache</a>
                    </div>
                </p>';
                $i++;
            }
            ?>
        </div>
    </div>
</body>
</html>
