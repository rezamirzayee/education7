<?php require '/views/layouts/header.php'; require '/controllers/page/data.php'; ?>
<h5><span class="badge badge-light">Категорії: </span></h5>
<div class="row">
    <div class="col-xl-3 col-md-4 col-12">
		<div class="list-group">
		<?php foreach ($categoryList as $category): ?>
			<a href="/category/<?=$category['category_id']?>" class="list-group-item list-group-item-action"><?=$category['category_name']?></a>
		<?php endforeach; ?>
		</div>
	</div>

	
    <div class="col-xl-9 col-md-8 col-12">
        <div class="row">		
			<?php foreach ($publicationList as $publication): ?>
				<div class="col-xl-4 col-md-6 col-12">
					<div class="card mb-2">
						<img class="card-img-top" src="<?=$publication['publication_picture']?>" style="width:100%">
						<div class="card-body">
							<h4 class="card-title"><?=$publication['publication_title']?></h4>
							<p class="card-text"><?=summary($publication['publication_description'],120)?></p>
							<a href="/publication/<?=$publication['publication_id']?>" class="btn btn-primary">Відкрити публікацію</a>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
        </div>
    </div>
</div>
<?php require '/views/layouts/footer.php'; ?>