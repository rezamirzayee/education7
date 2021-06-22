<?php
ob_start();
// Підключаємо фреймворк
require 'framework/Nanite.php';
require 'framework/functions.php';

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'project');

if ($mysqli->connect_error) {
    echo "Помилка з'єднання із MySQL: " . $mysqli->connect_error;
    die;
}


// Виконається, якщо перейти в корінь сайту
get('/', function () {		
    require 'controllers/page/main.php';	
});


get('/project/login', function () {
    require 'views/project/login.php';
});

post('/project/login', function () {
    require 'controllers/page/login.php';	   
});

get('/project/logout', function () {
	session_destroy ();
	header("Location: /project");
});

post('/project/logout', function () {
	session_destroy ();
	header("Location: /project");
});


// Виконається, якщо в перейти за адресою /lab
get('/lab', function () {
    require 'controllers/page/lab.php';	    
});

get('/lab/2', function () {
    require 'views/labs/superglobals_form.php';
});

post('/lab/2', function () {
    require 'views/labs/superglobals_form.php';
});

/*
* Сторінка зі змінним параметром. Наприклад id статті на якомусь сайті.
* При переході за адресою /news/1, /news/2 відкриється відповідна публікація
* В нашому випадку це будуть сторінки з відповідними лабораторними роботами
*/
get('/lab/([a-zA-Z0-9\-_]+)', function ($id) {
   if ($id == 1) {
        require 'views/labs/basic.php';
    } else if ($id == 2) {
        require 'views/labs/superglobals_form.php';
    } else if ($id == 3) {
        require 'views/labs/database.php';
    } else if ($id == 4) {
        require 'views/labs/files_date.php';
    }
});


get('/test/form', function () {
    require 'views/labs/test_form.php';
});


// Виконається, якщо в перейти за адресою /lab
get('/project', function () {
    require 'controllers/page/project.php';	 
	require 'views/project/index.php';	
});


// Панель адміністратора
get('/project/admin', function () {
    require 'views/project/admin.php';
});

// Таблиця з усіма категоріями
get('/project/admin/category', function () {
    require 'controllers/category/index.php';
    require 'views/project/category/index.php';
});

// Створення категорії
get('/project/admin/category/create', function () {
    require 'views/project/category/create.php';
});
post('/project/admin/category/create', function () {
    require 'controllers/category/create.php';
});

// Оновлення категорї
get('/project/admin/category/update/([0-9]+)', function ($id) {
    require 'controllers/category/update-form.php';
});
post('/project/admin/category/update/([0-9]+)', function ($id) {
    require 'controllers/category/update.php';
});

// Видалення категорії
get('/project/admin/category/delete/([0-9]+)', function ($id) {
    require 'controllers/category/delete.php';
});


// Таблиця з усіма публiкацiями
get('/project/admin/publication', function () {
    require 'controllers/publication/index.php';
    require 'views/project/publication/index.php';
});

// Створення публiкацiї
get('/project/admin/publication/create', function () {
    require 'views/project/publication/create.php';
});
post('/project/admin/publication/create', function () {
    require 'controllers/publication/create.php';
});

// Оновлення публiкацiї
get('/project/admin/publication/update/([0-9]+)', function ($id) {
    require 'controllers/publication/update-form.php';
});
post('/project/admin/publication/update/([0-9]+)', function ($id) {
    require 'controllers/publication/update.php';
});

// Видалення публiкацiї
get('/project/admin/publication/delete/([0-9]+)', function ($id) {
    require 'controllers/publication/delete.php';
});

// Вiдобразити публiкацiю
get('/publication/([0-9]+)', function ($id) {
    require 'views/project/publication/publication.php';
});



/* Якщо при переході на якусь url адрессу не буде знайдено правило вище,
 * то виконаєсться ця умова */
if (!Nanite::$routeProccessed) {
    echo "404 Not Found";
}

ob_end_flush();
?>