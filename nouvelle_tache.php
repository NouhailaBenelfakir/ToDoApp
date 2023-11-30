<?php
    include_once('entete.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/TODOAPP/nouvelleTache.css" rel="stylesheet">
    <title>TO_DO_LIST</title>
    <style>
    </style>
</head>
<body>
    <div class="box">
        <h2>To_Do APP<img src="/TODOAPP/—Pngtree—list icon_3728094.png"></h2>
        <form method="post" action="creer_tache.php" class="add_task">
            <input type="text" placeholder="Add your text"  class="input_task" name="description" ><br>
            <input type="date" name="date_debut" placeholder="Date debut" class="date"/><br>
            <input type="date" name="date_fin" placeholder="Date fin" class="date"/><br>
            <input type="submit" value="Add" class="submit_task" >
        </form>
    </div>

</body>
</html>


