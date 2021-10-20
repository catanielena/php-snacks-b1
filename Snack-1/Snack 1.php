<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
            'homeTeam' => 'Pallacanestro Varese',
            'visitingTeam' => 'Virtus Segafredo Bologna',
            'homeTeamScore' => 105,
            'visitingTeamScore' => 93,
        ],
        [
            'homeTeam' => 'Pallacanestro Varese',
            'visitingTeam' => 'Virtus Segafredo Bologna',
            'homeTeamScore' => 74,
            'visitingTeamScore' => 78,
        ],
        [
            'homeTeam' => 'Olimpia Milano',
            'visitingTeam' => 'Brindisi',
            'homeTeamScore' => 94,
            'visitingTeamScore' => 79,
        ],
        [
            'homeTeam' => 'Allianz Pallacanestro Trieste',
            'visitingTeam' => 'Germani Brescia',
            'homeTeamScore' => 98,
            'visitingTeamScore' => 88,
        ]
    ];
    // for($i=0; $i<count($matches); $i++) {
    //     echo "{$matches[$i]['homeTeam']} - {$matches[$i]['visitingTeam']} | {$matches[$i]['homeTeamScore']}-{$matches[$i]['visitingTeamScore']}" . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Le partite di oggi</h1>
        <ul>
            <?php for($i=0; $i<count($matches); $i++) {?>
                <li><?php echo "{$matches[$i]['homeTeam']} - {$matches[$i]['visitingTeam']} | {$matches[$i]['homeTeamScore']}-{$matches[$i]['visitingTeamScore']}"; ?></li>
            <?php }; ?>
        </ul>
    </body>
</html>