<?php
global $mysqli;
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
?>

<?php require '/views/layouts/header.php'; ?>
<h5><span class="badge badge-light">Категорії: </span></h5>
<div class="row">
    <div class="col-xl-9 col-md-8 col-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>publication_id</th>
                <th>publication_title</th>
                <th>publication_description</th>
                <th>category_name</th>
                <th>publication_picture</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($publicationList as $publication): ?>
            <tr>
                <td><?=$publication['publication_id']?></td>
                <td><?=$publication['publication_title']?></td>
                <td><?=$publication['publication_description']?></td>
                <td><?=$publication['category_name']?></td>
                <td><?=$publication['publication_picture']?></td>
                <td>
                    <a href="/project/admin/publication/update/<?=$publication['publication_id']?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/project/admin/publication/delete/<?=$publication['publication_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/project/admin/publication/create" class="btn btn-primary btn-block">Нова публiкацiя</a>
    </div>
</div>
<?php require '/views/layouts/footer.php'; ?>
