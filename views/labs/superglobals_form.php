<?php
print_r($_COOKIE);
echo '<pre>';
print_r($_SERVER);


if (!empty($_GET)) {
    print_r($_GET);
    if ($_GET['get_form']) {
        echo 'Прізвище:' . $_GET['surname'] . '<br>';
        echo 'Iм\'я:' . $_GET['name'] . '<br>';
        echo 'Вiк:' . $_GET['age'] . '<br>';
    }
} else {
    echo 'get параметри відсутні<br>';
}

if (!empty($_POST)) {
    print_r($_POST);
	setcookie('surname', $_POST['surname'], time()+60*60*24*30, '/');
	setcookie('name', $_POST['name'], time()+60*60*24*30, '/');
} else {
    echo 'post параметри відсутні';
}

?>