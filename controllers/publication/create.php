<?php
global $mysqli;
$publication_title = $_POST['publication_title'];
$publication_description = $_POST['publication_description'];
$publication_body = $_POST['publication_body'];
$category_id = $_POST['category_id'];

$uploaddir = 'src/img/';
$uploadfile = $uploaddir . basename($_FILES['publication_picture']['name']);

if (move_uploaded_file($_FILES['publication_picture']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

$sql = "INSERT INTO `publication`(`publication_title`, `publication_description`, `publication_body`, `category_id`, `picture`) VALUES 
							     ('$publication_title','$publication_description','$publication_body','$category_id', '$uploadfile');";
$mysqli->query($sql) or die();


header("Location: /project/admin/publication");
exit();
?>
