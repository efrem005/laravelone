<?php include 'blok/header.php'; ?>
<div class="container">
    <div class="col-10 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?= $new['title'] ?></h5>
                <p class="card-text"><?= $new['description'] ?></p>
                <p class="card-text">автор: <?= $new['author'] ?></p>
                <p class="card-text">дата: <?= $new['created_at'] ?></p>
            </div>
        </div>
    </div>
</div>
<?php include 'blok/footer.php'; ?>
