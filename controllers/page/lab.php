<?php
$labArray = [
	[
		'title' => 'Налаштування середовища розробки. Основи мови програмування php',
		'id' => 1
	],
	[
		'title' => 'Суперглобальні змінні PHP. Опрацювання форм',
		'id' => 2
	],
	[
		'title' => 'PHP та бази даних MySQL',
		'id' => 3
	],
	[
		'title' => 'Дата та час. Робота з файловою системою на мові PHP',
		'id' => 4
	],
];	

echo "Виконання лабораторних завдань Мерзай	Реза:". $lab['title']."<br>";

foreach ($labArray as $lab){
	echo "<a href=lab/".$lab['id'].">".$lab['id'].") ". $lab['title']."</a><br>";
	
}

echo "url: php.education/lab";
?>