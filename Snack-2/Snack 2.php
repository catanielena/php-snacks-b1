<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $message = '';
    function submit() {      
        if(empty($_GET['name']) && empty($_GET['mail']) && empty($_GET['age'])) {
            return 'Attention one of the inputs is empty';
            die;
        };
        if(strlen($_GET['name']) > 3 && strpos($_GET['mail'], '@') && strpos($_GET['mail'],'.') && strlen($_GET['mail']) > 4 && is_numeric($_GET['age']) && $_GET['age'] > 0) {
            return 'Successful login';
        } else {
            return 'Access Denied';
            die;
        }
    };
    if(isset($_GET['btnSubmit'])) {
        $message = submit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack-2</title>
    </head>
    <body>
        <h1>Inserisci i tuoi dati</h1>
        <form action="" >
            <input type="text" name="name" placeholder="Enter your name">
            <input type="email" name="mail" placeholder="Enter your mail">
            <input type="number" name="age" placeholder="Enter your age">
            <input type="submit" value="Send Request" name="btnSubmit">
        </form>
        <p class="message"><?php echo $message; ?></p>
    </body>
</html>