<?php
$userList = [
	[
		'id' => 1,
		'username' => 'admin',
		'password' => 'admin'
	],
	[
		'id' => 2,
		'username' => 'user2',
		'password' => '123456'
	]
];
foreach ($userList as $user) {
	if ($user['username'] == $_POST['username'] and $user['password'] == $_POST['password']) {
		// Успіх. Потрібно автиризувати користувача ТУТ
		$_SESSION['username'] = $user['username'];
		// Переходимо на головну сторінку
		header("Location: /project");
		exit();
	}
}
// Умова жодного разу не спрацювала. Повертаємось на форму знову
header("Location: /project/login");
?>