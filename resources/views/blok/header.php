<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>News Home</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="<?=route('home')?>">Новостной канал</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php foreach ($category as $item): ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?=route('category.item', ['item' => $item['url']])?>"><?=$item['title'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="d-flex">
                <a class="btn btn-outline-success mx-1" href="/auth">авторизация</a>
                <a class="btn btn-outline-success" href="/admin/newNews/create">добавления новости</a>
            </div>
        </div>
    </div>
</nav>
