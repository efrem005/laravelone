<?php include 'blok/header.php'; ?>
<div class="container">
    <? foreach ($news as $new): ?>
        <div class="col-10 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?=$new['title']?></h5>
                    <a href="<?=route('news.show', ['id' => $new['id']])?>" class="card-link">подробней</a>
                </div>
            </div>
        </div>
    <? endforeach ?>
</div>
<?php include 'blok/footer.php'; ?>
