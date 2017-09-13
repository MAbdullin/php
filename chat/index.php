<?php
    require_once './database.php'
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Чат</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<!-- Навигационное меню -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#">Бесконечный чат</a>
        </div>
    </div>
</nav>
<div class="container">
<table>
    <?php foreach (getAll() as $product): ?>
    <tr>
        <td><?php echo $product[0] ?></td>
        <td><?php echo $product[1] ?></td>
        <td><?php echo $product[2] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
<nav class="navbar navbar-inverse navbar-fixed-bottom">
<div class="container" >
<form action="/chat/index.php" method="post">
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <input type="text" class="form-control input-lg" name="username" placeholder="Имя" value="<?=isset($_POST['username'])?htmlspecialchars($_POST['username']):'';?>">
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <input type="text" class="form-control input-lg" name="message" placeholder="Сообщение">
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 btn-group">
            <button class="btn-default btn-lg btn-block btn-info" type="submit" name="submit">Отправить</button>
        </div>
    </div>

</form>
</div>
</nav>
</body>
</html>