<?php require '/views/layouts/header.php'; require '/controllers/page/data.php'; $publicationList=getPublication($id); ?>
<div>
	<h5><span class="badge badge-light">Категорії: </span></h5>
	<div class="row" >
		<div class="col-xl-3 col-md-4 col-12">
			<div class="list-group">
			<?php foreach ($categoryList as $category): ?>
				<a href="/category/<?=$category['category_id']?>" class="list-group-item list-group-item-action"><?=$category['category_name']?></a>
			<?php endforeach; ?>
			</div>
		</div>


		<div class="row-xl-9 col-md-8 col-12">
			<div class="row">		
				<h1 style="margin-bottom:0.1em;"><?=$publicationList['publication_title']?></h1>
				<img src="/<?=$publicationList['publication_picture']?>" width="800em">
				<p style="margin-top:0.5em;margin-bottom:0.1em;"><?=$publicationList['publication_body'] ?></p>
			</div>
		</div>
	</div>
</div>
<?php require '/views/layouts/footer.php'; ?>
