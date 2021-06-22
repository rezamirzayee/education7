<?php
if (empty($_COOKIE['visits'])) {
	$before_visits = 0;
} else {
	$before_visits = $_COOKIE['visits'];
}
$current_visits = $before_visits + 1;
setcookie('visits', $current_visits,time()+60*60*24*30);

echo $_COOKIE['surname']." ".$_COOKIE['name'].' відвідав цю сторінку ' . $current_visits . ' разів<br>';


$array = array("Name"=>"Реза", 
			  "Surname"=>"Мерзай",  
			  "Group"=>"KI-151", 
			  "Social"=>"https://www.facebook.com"); 

$URL_1 = '/lab';	

echo "<h2>".$array["Surname"]." ".$array["Name"]."</h2>";
echo "Группа: ".$array["Group"]."<br>";
echo "<a href='".$array["Social"]."'>Facebook.com</a><br>";

$URL_1 = '/lab';
$URL_2 = '/project';
$title_1 = 'Лабораторні завдання';
$title_2 = 'Робочий проект';
echo "<a href='$URL_1'>{$title_1}</a><br>";
echo '<a href="' . $URL_2 . '">' . $title_2 . '</a><br>';
echo "<a href='/project/admin'>Панель адмiнiстрювання</a><br>";
echo "<a href='/controllers/page/download.php'>Скачать файл</a>";
?>