<?php include 'blok/header.php'; ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <form class="col-6">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Логин</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">запомнить</label>
            </div>
            <button type="submit" class="btn btn-primary">войти</button>
        </form>
    </div>
</div>
<?php include 'blok/footer.php'; ?>
