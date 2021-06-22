<?php require '/views/layouts/header.php'; ?>
<div class="row mt-5 ml-xl-4 ml-md-3 ml-sm-1">
    <div class="col-xl-3 col-lg-5 col-md-6 col-sm-8 col-12 ">
        <form method="post" action="">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Логін</label>
                <div class="col-sm-10">
                    <input name="username" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Пароль</label>
                <div class="col-sm-10">
                    <input name="password" type="password" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary btn-block">Увійти</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require '/views/layouts/footer.php'; ?>
