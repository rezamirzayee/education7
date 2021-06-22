<?php
global $mysqli;
$publication_title = $_POST['publication_title'];
$publication_description = $_POST['publication_description'];
$publication_body = $_POST['publication_body'];
$category_id = $_POST['category_id'];

$uploaddir = 'src/img/';
$uploadfile = $uploaddir . basename($_FILES['publication_picture']['name']);
var_dump($_FILES);

$sql="UPDATE `publication` SET ";

if(!empty($publication_title)){
	$sql.="`publication_title`='$publication_title', ";
}
if(!empty($publication_description)){
	$sql.="`publication_description`='$publication_description', ";
}
if(!empty($publication_body)){
	$sql.="`publication_body`='$publication_body', ";
}
if(!empty($category_id)){
	$sql.="`category_id`='$category_id'";
}
if(!empty(basename($_FILES['publication_picture']['name']))){
	if (move_uploaded_file($_FILES['publication_picture']['tmp_name'], $uploadfile)) {
		echo "Файл корректен и был успешно загружен.\n";
	} else {
		echo "Возможная атака с помощью файловой загрузки!\n";
	}
	
	$sql.=", `picture`='$uploadfile' ";
}

$sql.=" WHERE publication_id=$id";

echo $sql;
$mysqli->query($sql);

header("Location: /project/admin/publication");
?>