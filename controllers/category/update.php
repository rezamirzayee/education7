<?php
global $mysqli;
$category_id = $id;
$category_name = $_POST['category_name'];
$sql = "UPDATE category SET category_name = '" . $category_name . "' WHERE category_id = '".$category_id."'";
$mysqli->query($sql);
echo $sql;

header("Location: /project/admin/category");
?>