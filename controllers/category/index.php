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
?>

<?php require '/views/layouts/header.php'; ?>
<h5><span class="badge badge-light">Категорії: </span></h5>
<div class="row">
    <div class="col-xl-9 col-md-8 col-12">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>category_id</th>
                <th>category_name</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categoryList as $category): ?>
            <tr>
                <td><?=$category['category_id']?></td>
                <td><?=$category['category_name']?></td>
                <td>
                    <a href="/project/admin/category/update/<?=$category['category_id']?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="/project/admin/category/delete/<?=$category['category_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/project/admin/category/create" class="btn btn-primary btn-block">Створити категорію</a>
    </div>
</div>
<?php require '/views/layouts/footer.php'; ?>
