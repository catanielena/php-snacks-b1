<?php 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Snack6</title>
    </head>
    <body>
        <div class="category teachers">
            <h3>Teachers</h3>
            <?php foreach($db['teachers'] as $person) {?>
                <ul><li><?= "{$person['name']} {$person['lastname']}" ?></li></ul>
            <?php };?>
        </div>
        <div class="category pm">
            <h3>Pm</h3>
            <?php foreach($db['pm'] as $person) {?>
                <ul><li><?= "{$person['name']} {$person['lastname']}" ?></li></ul>
            <?php };?>
        </div>
    </body>
</html>