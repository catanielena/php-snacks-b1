<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
<?php 
    $register = [
        [
            'name'=> 'Franco',
            'surname' => 'Vitali',
            'votes' => [6,7,3,4,5,2]
        ],
        [
            'name'=> 'Elisa',
            'surname' => 'Rossi',
            'votes' => [10,9,7,6,4,5]
        ],
        [
            'name'=> 'Dario',
            'surname' => 'Voltolini',
            'votes' => [8,8,8,9,6,5]
        ],
        [
            'name'=> 'Giovanni',
            'surname' => 'Modonesi',
            'votes' => [5,6,7,8,7,8]
        ],
        [
            'name'=> 'Marta',
            'surname' => 'Sbalzer',
            'votes' => [6,6,7,6,5,8]
        ],
        [
            'name'=> 'Marco',
            'surname' => 'Noventa',
            'votes' => [5,6,6,9,7,6]
        ],
        [
            'name'=> 'Silvia',
            'surname' => 'Forloni',
            'votes' => [7,3,7,5,6,6]
        ],
    ];
    function average($votes) {
        $sum = 0;
        foreach ($votes as $vote) {
            $sum += $vote;
        };
        return ceil($sum / count($votes));
    };
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