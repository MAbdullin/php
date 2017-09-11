<?php

    require './quest.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Победи дракона</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>

<!-- Навигационное меню -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Победи дракона</a>
        </div>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col-sm-2">
            <img src="./img/avatar1.jpg" class="img-thumbnail" alt="Card image cap">
        </div>


        <div class="col-sm-10">
            <?=$question ?>

        </div>
    </div>

</div>



<form action="index.php" method="post">
    <div class="container">

        <div class="row btn-group-vertical col-sm-12">
            <?php foreach ($answers as $answer) : ?>
            <label class="btn btn-default  btn-lg btn-block">
                <input
                    type="radio"
                    name="answer"
                    value=<?=json_encode($answer) ?>
                >

                <?= $answer['text']; ?>
            </label>
            <?php endforeach; ?>

        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
        <input type="submit" class="btn btn-primary" name="submit" value="Отправить">
    </div>
    <div class="container">
        <?=$result ?>

    </div>

</form>
</body>
</html>