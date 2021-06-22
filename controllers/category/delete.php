<?php
global $mysqli;
$sql = "DELETE FROM category WHERE category_id = $id";
$mysqli->query($sql);

header("Location: /project/admin/category");
?>