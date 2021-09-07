<?php include 'blok/header.php' ?>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <form action="/admin/newNews" method="post" class="col-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">категория</label>
                <select class="form-select" id="exampleInputEmail1">
                    <option selected>выбирете категорию....</option>
                    <?php foreach ($category as $item): ?>
                        <option value="<?=$item['url'];?>"><?=$item['title']?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">название</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">текс</label>
                <textarea class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">автор</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">добавить</button>
        </form>
    </div>
</div>
<?php include 'blok/footer.php'; ?>
