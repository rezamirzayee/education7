<?php
global $mysqli;
$sql = "SELECT * FROM category";
$results = $mysqli->query($sql);

$categoryList = array();
$i = 0;

while ($row = $results->fetch_assoc()) {
    $categoryList[$i]['category_id'] = $row['category_id'];
    $categoryList[$i]['category_name'] = $row['category_name'];
    $i++;
}

$sql = "SELECT * FROM `publication` INNER JOIN `category` ON publication.category_id=category.category_id ORDER BY publication_id ASC";
$results = $mysqli->query($sql);

$publicationList = array();
$i = 0;

while ($row = $results->fetch_assoc()) {
	$publicationList[$i]['publication_id'] = $row['publication_id'];
	$publicationList[$i]['publication_title'] = $row['publication_title'];
	$publicationList[$i]['publication_description'] = $row['publication_description'];
	$publicationList[$i]['publication_body'] = $row['publication_body'];
	$publicationList[$i]['category_name'] = $row['category_name'];
	$publicationList[$i]['publication_picture'] = $row['picture'];
	$i++;
}

function getPublication($id){		
	global $mysqli;
	$sql = "SELECT * FROM `publication` INNER JOIN `category` ON publication.category_id=category.category_id WHERE publication_id=$id LIMIT 1";
	$results = $mysqli->query($sql);

	$row = $results->fetch_assoc();
	$publicationList = array();
	$i = 0;
	$publicationList[$i]['publication_id'] = $row['publication_id'];
	$publicationList[$i]['publication_title'] = $row['publication_title'];
	$publicationList[$i]['publication_description'] = $row['publication_description'];
	$publicationList[$i]['publication_body'] = $row['publication_body'];
	$publicationList[$i]['category_name'] = $row['category_name'];
	$publicationList[$i]['publication_picture'] = $row['picture'];
	
	return $publicationList[$i];
}

function summary($str, $limit=100, $strip = false) {
    $str = ($strip == true)?strip_tags($str):$str;
    if (strlen ($str) > $limit) {
        $str = substr ($str, 0, $limit - 3);
        return (substr ($str, 0, strrpos ($str, ' ')).'...');
    }
    return trim($str);
}
?>