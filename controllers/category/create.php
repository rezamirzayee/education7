<?php
global $mysqli;
$category_name = $_POST['category_name'];
$sql = "INSERT INTO category (category_name) VALUES ('".$category_name."')";
$mysqli->query($sql);

header("Location: /project/admin/category");
?>