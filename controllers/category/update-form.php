<?php
global $mysqli;

$sql = "SELECT * FROM category WHERE category_id = $id";
$results = $mysqli->query($sql);
if ($category = $results->fetch_assoc()) {
    require 'views/project/category/update.php';
} else {
    echo "Категорію з id = $id не знайдено!";die;
}
?>