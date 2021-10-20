<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $message = '';
    function submit() {      
        if(empty($_GET['name']) && empty($_GET['mail']) && empty($_GET['age'])) {
            return 'Attention one of the inputs is empty';
            die;
        };
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if(strlen($name) < 4) {
            return 'Access Denied! Attention: the name must have at least 4 characters';
            die;
        } else if(strpos($mail, '@') == false && strpos($mail,'.') == false && strlen($mail) > 4) {
            return 'Access Denied! Warning: the formatting of the email is incorrect';
            die;
        } else if(is_numeric($age) == false && $age > 0) {
            return 'Access Denied! Warning age must be a number';
            die;
        } else {
            return 'Successful login';
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