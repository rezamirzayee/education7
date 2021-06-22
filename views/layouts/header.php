<!DOCTYPE html>
<html lang="en">
<head>
    <title>Персональний блог</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <script src="/src/js/jquery.min.js"></script>
    <script src="/src/js/popper.min.js"></script>
    <script src="/src/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <ul class="navbar-nav">
		<li class="nav-item active">
            <a class="nav-link" href="/project">Блог Мерзай Реза</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="">Social link</a>
		</li>
		<?php if($_SESSION['username']): ?>
			<li class="nav-item">
				<a class="nav-link" href="/project/logout">Вихід (<?php echo $_SESSION['username'] ?>)</a>
			</li>
		<?php else: ?>
			<li class="nav-item">
				<a class="nav-link" href="/project/login">Вхід</a>
			</li>
		<?php endif; ?>
	</ul>
</nav>
<div class="container-fluid">