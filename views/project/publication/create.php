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
<div class="row mt-5 ml-xl-4 ml-md-3 ml-sm-1">
    <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8 col-12 ">
        <form method="post" enctype="multipart/form-data" action="">
            <div class="form-group row">
                <label class="col-sm-4 col-form-label">Назва</label>
                <div class="col-sm-8">
                    <input name="publication_title" class="form-control">
                </div>
                <label class="col-sm-4 col-form-label">Опис</label>
                <div class="col-sm-8">
                    <input name="publication_description" class="form-control">
                </div>
                <label class="col-sm-4 col-form-label">Тiло</label>
                <div class="col-sm-8">
                    <input name="publication_body" class="form-control">
                </div>
                <label class="col-sm-4 col-form-label">Категорiя</label>
                <div class="col-sm-8">
					<select name="category_id">
					<?php foreach($categoryList as $category){
						echo '<option value="'.$category['category_id'].'">'.$category['category_name'].'</option>'."\n";
					}
					?>
					</select>
                </div>
                <label class="col-sm-4 col-form-label">Зображення</label>
                <div class="col-sm-8">
                    <input name="publication_picture" type="file">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block">Створити</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require '/views/layouts/footer.php'; ?>
