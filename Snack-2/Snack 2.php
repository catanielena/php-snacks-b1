<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    if(!empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        if(strlen($name) > 3 && strpos($mail, '@') && strpos($mail,'.') && strlen($mail) > 4 && is_numeric($age)) {
            echo 'Successful login';
        } else {
            echo 'Access Denied';
        }
    } else {
        echo 'Attention one of the inputs is empty';
    }
?>