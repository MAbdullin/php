<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <base href="/lessons/15_1/">
</head>
<body>
<div class="container">
    <h1>Товары</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Название</td>
                    <td>Описание</td>
                    <td>Цена</td>
                    <td>Перейти</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['title'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><?= $product['price'] ?></td><!--
                        <td><? /*= $product['timestamp'] */ ?></td>-->
                        <td>
                            <a href="products/<?= $product['id'] ?>/view">
                                Перейти
                            </a>
                        </td>
                        <td>
                            <a href="products/<?= $product['id'] ?>/edit">
                                Редактировать
                            </a>
                        </td>
                        <td>
                            <form action="products/<?= $product['id'] ?>/delete" method="POST">
                                <button type="submit" name="delete">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Кнопка, вызывающее модальное окно -->
            <button href="#myModal1" class="btn btn-primary" data-toggle="modal">Добавить товар</button>

            <!-- модальное окно-->
            <div id="myModal1" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Создание товара</h4>
                        </div>
                        <div class="modal-body">
                            <!-- форма для добавления отзыва-->
                            <form action="products/create" method="POST">
                                <input type="text" name="title" placeholder="Название">
                                <input type="text" name="description" placeholder="Описание">
                                <input type="number" name="price" placeholder="Цена">
                                <button type="submit">Создать</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1>Отзывы</h1>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Имя</td>
                    <td>Телефон</td>
                    <td>Сообщение</td>
                    <td>Перейти</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($reviews as $review) : ?>
                    <tr>
                        <td><?= $review['id'] ?></td>
                        <td><?= $review['name'] ?></td>
                        <td><?= $review['phone'] ?></td>
                        <td><?= $review['text'] ?></td><!--
                        <td><? /*= $review['timestamp'] */ ?></td>-->
                        <td>

                            <a href="reviews/<?= $review['id'] ?>/view">


                                Перейти
                            </a>
                        </td>
                        <td>

                            <a href="reviews/<?= $review['id'] ?>/edit">

                                Редактировать
                            </a>
                        </td>
                        <td>

                            <form action="reviews/<?= $review['id'] ?>/delete" method="POST">
                                <button type="submit" name="delete">Удалить</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <!-- ссылка для открытия модального окна-->
            <button href="#myModal2" class="btn btn-primary" data-toggle="modal">Добавить отзыв</button>

            <!-- модальное окно-->
            <div id="myModal2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Создание отзыва</h4>
                        </div>
                        <div class="modal-body">
                            <!-- форма для добавления отзыва-->
                            <form action="reviews/create" method="POST">
                                <input type="text" name="name" placeholder="Имя">
                                <input type="number" name="phone" placeholder="Телефон">
                                <input type="text" name="text" placeholder="Сообщение">
                                <button type="submit">Создать</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>