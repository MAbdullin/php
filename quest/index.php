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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/mynavbar.js"></script>
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
            <img src="<?php echo getImage($steps) ?>" alt="Card image cap">
        </div>


        <div class="col-sm-8">

        </div>
        <div class="col-sm-2">
            <p>1 ход</p>
            <p>Экипировка:</p>
        </div>
    </div>

</div>



<form action="index.php" method="post">
    <div class="container">
        <div>
            <?=$question ?>

        </div>
        <div class="form-horizontal">
            <?php foreach ($answers as $answer) : ?>
                <input
                    type="radio"
                    name="answer"
                    value=<?=json_encode($answer) ?>
                >

                <?= $answer['text']; ?>
            <?php endforeach; ?>
       </div>
                <input type="submit" name="submit" value="Отправить">
        <div>
            <?=$result ?>

        </div>
    </div>
</form>
</body>
</html>