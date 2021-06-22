<?php
global $mysqli;

$sql = "SELECT * FROM publication WHERE publication_id = $id";
$results = $mysqli->query($sql);
if ($publication = $results->fetch_assoc()) {
	$sql = "SELECT * FROM category";
	$results = $mysqli->query($sql);

	$categoryList = array();
	$i = 0;

	while ($row = $results->fetch_assoc()) {
		$categoryList[$i]['category_id'] = $row['category_id'];
		$categoryList[$i]['category_name'] = $row['category_name'];
		$i++;
	}
	
    require 'views/project/publication/update.php';
} else {
    echo "Категорію з id = $id не знайдено!";die;
}
?>