<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php 
    require __DIR__ . "/data.php";
    include __DIR__ . "/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack7</title>
    </head>
    <body>
        <h1>Registro</h1>
        <?php foreach($register as $student) {?>
            <h4><?= "{$student['name']} {$student['surname']}"?></h4>
            <p>Media: <?= average($student['votes']) ?></p>
        <?php };?>
    </body>
</html>