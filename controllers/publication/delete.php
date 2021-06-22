<?php
global $mysqli;
$sql = "DELETE FROM publication WHERE publication_id = $id";
$mysqli->query($sql);

header("Location: /project/admin/publication");
?>