<?php require '/views/layouts/header.php'; ?>
    <div class="row mt-5 ml-xl-4 ml-md-3 ml-sm-1">
        <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8 col-12 ">
            <form method="post" action="/project/admin/category/update/<?=$category['category_id']?>">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Назва категорії</label>
                    <div class="col-sm-8">
                        <input name="category_name" class="form-control" value="<?=$category['category_name']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">Оновити</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require '/views/layouts/footer.php'; ?>
